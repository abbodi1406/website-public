<#
This was made because I refuse to continue taking part in the unwritten
PowerShell/Batch obfuscation contest.
#>

param (
    [Parameter()]
    [Switch]$ForDownload
)

<#
There are myths that some Windows versions do not work without this.

Since I can't be arsed to verify this, I'm just adding this to lower the number
of reports to which I would normally respond with "works on my machine".
#>
try {
    [Net.ServicePointManager]::SecurityProtocol = [Net.SecurityProtocolType]::Tls12
} catch {
    Write-Error "Abandonware operating systems are not supported."
    Exit 1
}

$filesDownload = @('aria2c.exe')
$filesConvert = @('aria2c.exe', '7zr.exe', 'uup-converter-wimlib.7z')

$urls = @{
    'aria2c.exe' = 'https://github.com/uup-dump/containment-zone/raw/040acc321bc471f92d4647b2f291e33f0f635faa/aria2c.exe';
    '7zr.exe' = 'https://github.com/uup-dump/containment-zone/raw/040acc321bc471f92d4647b2f291e33f0f635faa/7zr.exe';
    'uup-converter-wimlib.7z' = 'https://github.com/uup-dump/containment-zone/raw/040acc321bc471f92d4647b2f291e33f0f635faa/uup-converter-wimlib.7z';
}

$hashes = @{
    'aria2c.exe' = '0ae98794b3523634b0af362d6f8c04a9bbd32aeda959b72ca0e7fc24e84d2a66';
    '7zr.exe' = '108ab5f1e36f2068e368fe97cd763c639e403cac8f511c6681eaf19fc585d814';
    'uup-converter-wimlib.7z' = '5d75d1c916285c2a6b9035b63ff019b6ed76720cfd1a1228c42c3d758d471aa1';
}

function Retrieve-File {
    param (
        [String]$File,
        [String]$Url
    )

    Write-Host -BackgroundColor Black -ForegroundColor Yellow "Downloading ${File}..."
    Invoke-WebRequest -UseBasicParsing -Uri $Url -OutFile "files\$File" -ErrorAction Stop
}

function Test-Hash {
    param (
        [String]$File,
        [String]$Hash
    )

    Write-Host -BackgroundColor Black -ForegroundColor Cyan "Verifying ${File}..."

    $fileHash = (Get-FileHash -Path "files\$File" -Algorithm SHA256 -ErrorAction Stop).Hash
    return ($fileHash.ToLower() -eq $Hash)
}

if($ForDownload.IsPresent) {
    $files = $filesDownload
} else {
    $files = $filesConvert
}

if(-not (Test-Path -PathType Container -Path "files")) {
    $null = New-Item -Path "files" -ItemType Directory
}

foreach($file in $files) {
    try {
        Retrieve-File -File $file -Url $urls[$file]
    } catch {
        Write-Host "Failed to download $file"
        Write-Host $_
        Exit 1
    }
}

Write-Host ""

foreach($file in $files) {
    if(-not (Test-Hash -File $file -Hash $hashes[$file])) {
        Write-Error "$file appears to be tampered with"
        Exit 1
    }
}

Write-Host ""
Write-Host -BackgroundColor Black -ForegroundColor Green "It appears all the dependencies are ready."
