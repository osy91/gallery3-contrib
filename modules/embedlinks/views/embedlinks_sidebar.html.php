<?php defined("SYSPATH") or die("No direct script access.") ?>
<? if (module::get_var("embedlinks", "HTMLCode")) { ?>
<a href="<?= url::site("embedlinks/showhtml/{$item->id}") ?>" title="<?= t("HTML Links") ?>"
  class="gDialogLink gButtonLink ui-icon-left ui-state-default ui-corner-all">
  <span class="ui-icon ui-icon-info"></span>
  <?= t("HTML Code") ?>
</a><br />
<? } ?>

<? if (module::get_var("embedlinks", "BBCode")) { ?>
<a href="<?= url::site("embedlinks/showbbcode/{$item->id}") ?>" title="<?= t("BBCode Links") ?>"
  class="gDialogLink gButtonLink ui-icon-left ui-state-default ui-corner-all">
  <span class="ui-icon ui-icon-info"></span>
  <?= t("BBCode") ?>
</a>
<? } ?>