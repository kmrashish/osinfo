<html>
<head><title> About Mac </title>
<link rel="stylesheet" type="text/css" href="osinfo.css">
<script type="text/javascript" src="osinfo.js"></script>
</head>
<body>
<div class="sitelogo">  <img src="sitelogo.png" alt="" usemap="#myMap"/> </div>
<center> <p id="whatru" style="margin-top:0px"> Mac OS on non-Apple machines </p> <img src="mac_logo.png"/> </center><br><hr color="#999999">

<div id="biggest" style="width:100%; margin-left:20px;">		
		<p>Although apparently a violation of Apple's End User License Agreement, running OS X operating systems compiled for x86 or x86_64 ("Intel 64") on a non-Apple PC is possible using several approaches. If the processor is an Intel Core 2 or later, but not an Intel Atom, Apple's standard mach_kernel is sufficient. If the processor is an Atom, the user-supported "legacy" mach_kernel_atom, derived from the appropriate mach_kernel, is required. If the processor is a pre-Core 2 Intel, e.g., a late Pentium 4 either with or without EM64T, but usually with H-T, the user-supported "legacy" mach_kernel_non-atom, derived from the appropriate mach_kernel, is required.</p><p>

Installation of MacOS X requires a MacOS X Installer emulator, the most straightforward of which is a USB flash drive-type Installer emulator. Once the installation has been successfully completed to the hard drive, the hard drive may be booted using the emulator portion of the USB flash drive as a "helper" and a boot loader Installer may be downloaded and used to place the boot loader on the hard drive's boot blocks. Thereafter, MacOS X may be booted from the hard drive alone; the installed boot loader takes care of any required device injection and/or kernel patching.

MacOS X is generally compatible with any Intel desktop-based system or Intel-based motherboard, ICH6 or later, however compatibility past Snow Leopard cannot be assured with ICH6. Compatibility with ICH7 and with Lion and 945 (G)MCH has already been demonstrated and proven. Compatibility with ICH7 or later and any associated MCH/(G)MCH is quite good, certainly including Lion, and possibly also including Mountain Lion.</p><p>

MacOS X compatibility with Intel laptop- or netbook-based systems is quite variable but has been successful on a few Intel Atom-based netbooks.</p></div>
        <map name="myMap">
	<area shape="rect" coords="5,20,255,55" href="http://www.osinfo.net" title="Home">
    <area shape="rect" coords="8,62,124,77" href="aboutdev.php" title="About Dev">
    <area shape="rect" coords="9,79,186,94" href="http://www.mozilla.org/en-US/firefox/new/" title="Click here to download Firefox ;)">
    </map>
</body>
</html>
