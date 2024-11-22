rem call: str_imgseq <file.ts>
start "" ffmpeg -re -i %1  -r 1 W:\%%07d.jpg

