<?php
/**
 * Template footer, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** FOOTER ********** -->
<div id="dokuwiki__footer"><div class="pad">
    <?php tpl_license(''); // license text ?>

    <div class="buttons">
        <?php
            tpl_license('button', true, false, false); // license button, no wrapper
            $target = ($conf['target']['extern']) ? 'target="'.$conf['target']['extern'].'"' : '';
        ?>
        <a href="http://www.dokuwiki.org/donate" title="Donate" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-donate.gif" width="80" height="15" alt="Donate" /></a>
        <a href="http://www.php.net" title="Powered by PHP" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-php.gif" width="80" height="15" alt="Powered by PHP" /></a>
        <a href="http://validator.w3.org/check/referer" title="Valid HTML5" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-html5.png" width="80" height="15" alt="Valid HTML5" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="Valid CSS" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-css.png" width="80" height="15" alt="Valid CSS" /></a>
        <a href="http://dokuwiki.org/" title="Driven by DokuWiki" <?php echo $target?>><img
            src="<?php echo tpl_basedir(); ?>images/button-dw.png" width="80" height="15" alt="Driven by DokuWiki" /></a>
    </div>
</div></div><!-- /footer -->
<!-- ********** WebTrends ********** -->
<script src="http://www.gencat.cat/js/analitica/webtrends2.js" language="Javascript"></script>
<script language="Javascript">
    var _tag = new WebTrends();
    _tag.dcsid="dcs222fkhwufkgq4l9kkjw3lo_1p3l";
    _tag.dcsGetId();
</script>
<script language="Javascript">
    _tag.DCSext.wt_departament="Ensenyament";
    _tag.DCSext.wt_web1="Ateneu";
    _tag.DCSext.wt_web2="";
    _tag.DCSext.wt_web3="";
    _tag.WT.cg_n="";
    _tag.WT.cg_s="";
    _tag.DCSext.subcontent1="";
    _tag.DCSext.subcontent2="";
    _tag.DCSext.subcontent3="";
    _tag.DCSext.subcontent4="";
    _tag.dcsCollect();
</script>
<noscript>
    <img alt="" name="DCSIMG" width="1" height="1" src="http://statse.webtrendslive.com/dcs222fkhwufkgq4l9kkjw3lo_1p3l/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.0.2"/>
</noscript>
<!-- /WebTrends -->
<?php
tpl_includeFile('footer.html');
