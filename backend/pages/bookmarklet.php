<?php
/**
 * page bookmarklet
 */
$sReturn = '';

$oRenderer=new ressourcesrenderer();
$sReturn.=''
        .'<h3>'.$this->lB('bookmarklet.details.head').'</h3>'
            . $oRenderer->renderBookmarklet('details')

        .'<h3>'.$this->lB('bookmarklet.httpheaderchecks.head').'</h3>'
            .$oRenderer->renderBookmarklet('httpheaderchecks')
            .'<br><br>'
            .$this->lB('bookmarklet.httpheaderchecks.posthint2')

        .'<h3>'.$this->lB('bookmarklet.sslcheck.head').'</h3>'
            .$oRenderer->renderBookmarklet('sslcheck')
            .'<br><br>'
            .$this->lB('bookmarklet.sslcheck.posthint2')
        ;

return $sReturn;
