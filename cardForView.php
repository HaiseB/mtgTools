<?php

class cardForView
{
    static function renderColor($card)
    {
        return $card->color;
    }

    static function renderType($card)
    {
        $type = $card->isLegendary ? 'legendary ' : '';
        $type .= $card->isCreature ? 'creature ' : '';
        $type .= $card->isPlaneswalker ? 'planeswalker ' : '';
        $type .= $card->isArtifact ? 'artifact ' : '';
        $type .= $card->isEnchantment ? 'enchantment ' : '';
        $type .= $card->isInstant ? 'instant ' : '';
        $type .= $card->isSorcery ? 'sorcery ' : '';
        $type .= $card->isLand ? 'land' : '';

        return $type;
    }

    static function renderStats($card)
    {
        return $card->loyalty ? $card->loyalty : $card->power . '/' . $card->toughness ;
    }
}
