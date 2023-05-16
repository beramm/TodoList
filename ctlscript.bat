@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\web\hypersonic\scripts\ctl.bat (start /MIN /B D:\web\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\web\ingres\scripts\ctl.bat (start /MIN /B D:\web\ingres\scripts\ctl.bat START)
if exist D:\web\mysql\scripts\ctl.bat (start /MIN /B D:\web\mysql\scripts\ctl.bat START)
if exist D:\web\postgresql\scripts\ctl.bat (start /MIN /B D:\web\postgresql\scripts\ctl.bat START)
if exist D:\web\apache\scripts\ctl.bat (start /MIN /B D:\web\apache\scripts\ctl.bat START)
if exist D:\web\openoffice\scripts\ctl.bat (start /MIN /B D:\web\openoffice\scripts\ctl.bat START)
if exist D:\web\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\web\apache-tomcat\scripts\ctl.bat START)
if exist D:\web\resin\scripts\ctl.bat (start /MIN /B D:\web\resin\scripts\ctl.bat START)
if exist D:\web\jetty\scripts\ctl.bat (start /MIN /B D:\web\jetty\scripts\ctl.bat START)
if exist D:\web\subversion\scripts\ctl.bat (start /MIN /B D:\web\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\web\lucene\scripts\ctl.bat (start /MIN /B D:\web\lucene\scripts\ctl.bat START)
if exist D:\web\third_application\scripts\ctl.bat (start /MIN /B D:\web\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\web\third_application\scripts\ctl.bat (start /MIN /B D:\web\third_application\scripts\ctl.bat STOP)
if exist D:\web\lucene\scripts\ctl.bat (start /MIN /B D:\web\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\web\subversion\scripts\ctl.bat (start /MIN /B D:\web\subversion\scripts\ctl.bat STOP)
if exist D:\web\jetty\scripts\ctl.bat (start /MIN /B D:\web\jetty\scripts\ctl.bat STOP)
if exist D:\web\hypersonic\scripts\ctl.bat (start /MIN /B D:\web\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\web\resin\scripts\ctl.bat (start /MIN /B D:\web\resin\scripts\ctl.bat STOP)
if exist D:\web\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\web\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\web\openoffice\scripts\ctl.bat (start /MIN /B D:\web\openoffice\scripts\ctl.bat STOP)
if exist D:\web\apache\scripts\ctl.bat (start /MIN /B D:\web\apache\scripts\ctl.bat STOP)
if exist D:\web\ingres\scripts\ctl.bat (start /MIN /B D:\web\ingres\scripts\ctl.bat STOP)
if exist D:\web\mysql\scripts\ctl.bat (start /MIN /B D:\web\mysql\scripts\ctl.bat STOP)
if exist D:\web\postgresql\scripts\ctl.bat (start /MIN /B D:\web\postgresql\scripts\ctl.bat STOP)

:end

