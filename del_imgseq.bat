@echo off
rem start "" required
cd /d w:\
setlocal enabledelayedexpansion
:loop
  set /a count=0
for /f "tokens=* delims=" %%g in ('dir /a-d /b /tc /o:-d *.jpg') do (
  set /a count+=1
  if !count! geq 5 echo del "%%~g"
)
ping 127.0.0.1 -n 2 -w 1000 > nul
goto loop
endlocal
