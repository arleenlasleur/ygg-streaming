# ��� "��������" ����� �����������

����� ������������ ����� ���� � meta-refresh ����������, ������������� ���������� ����, ���� �������� � AJAX ��������� ������ ������ �����. ������ <div> ����������� ������� ��� �����������, ����� ����� ���� ���������. ������� ����� ��� JS ������ ������ ���� ��������.

������� ��������:

1. � OBS ��������� ������ ��������� (1, 2, 5 � � �). Fractional ��������� �� �������� ffmpeg, ����� ������������ Integer FPS, ��� ��� ������� - �������.

2. ��������� ������ � OBS

3. ��������� `str_imgseq.bat`, ������ ��� ����� � �������. FFMPEG ����� �������������������� .ts ���� � ����� �����������. � ��������� RAM ���� ImDiskTk.

4. ����� �� �� ������������, � ����� ���� `del_imgseq.bat`, �� ������� ��� ������ �����, ����� 5 ���������. PHP ����� ����� ����� �� ���. � ���� ������ ������ ���� � ����� �����������, � �������� �������� ����� `W:\`, ��� ������� �������� ��� �������������.

���� ���������� ������ � OBS, FFMPEG �������� �� ����� ����� � �����������. `del_imgseq.bat` ���� ��������� �������.

����� nginx ���� ������ � RAM-�����, ������� ������� ���������� ������ �� ��� �����, �� ������� ��������� ������� ���� ��������� `root`. ������������� ���� ������ ������� � ������ ����� `index1.php`. �������� ��� ����� ������� �������� `mklink /d yggstream w:\` �� �������� �� ���� ������� ���� `html2` (��� ���������� ��� root).

todo: �������� nojs ������ ���������