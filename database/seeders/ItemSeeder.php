<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => 'Refined Mithril',
                'apiName' => 'REFINED_MITHRIL',
                'rarity' => 'EPIC',
                'duration' => '6 hours',
            ],
            [
                'name' => 'Enchanted Mithril',
                'apiName' => 'ENCHANTED_MITHRIL',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Mithril',
                'apiName' => 'MITHRIL',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Refined Diamond',
                'apiName' => 'REFINED_DIAMOND',
                'rarity' => 'EPIC',
                'duration' => '8 hours',
            ],
            [
                'name' => 'Enchanted Diamond Block',
                'apiName' => 'ENCHANTED_DIAMOND_BLOCK',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Diamond',
                'apiName' => 'ENCHANTED_DIAMOND',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Diamond',
                'apiName' => 'DIAMOND',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Refined Titanium',
                'apiName' => 'REFINED_TITANIUM',
                'rarirty' => 'LEGENDARY',
                'duration' => '12 hours',
            ],
            [
                'name' => 'Enchanted Titanium',
                'apiName' => 'ENCHANTED_TITANIUM',
                'rarity' => 'EPIC',
                'duration' => null,
            ],
            [
                'name' => 'Titanium',
                'apiName' => 'TITANIUM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Refined Umber',
                'apiName' => 'REFINED_UMBER',
                'rarity' => 'EPIC',
                'duration' => '1 hour',
            ],
            [
                'name' => 'Enchanted Umber',
                'apiNAme' => 'ENCHANTED_UMBER',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Umber',
                'apiName' => 'UMBER',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Refined Tungsten',
                'apiName' => 'REFINED_TUNGSTEN',
                'rarity' => 'EPIC',
                'duration' => '1 hour',
            ],
            [
                'name' => 'Enchanted Tungsten',
                'apiNAme' => 'ENCHANTED_TUNGSTEN',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Tungsten',
                'apiName' => 'TUNGSTEN',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Bejeweled Handle',
                'apiName' => 'BEJEWELED_HANDLE',
                'rarity' => 'RARE',
                'duration' => '30 seconds',
            ],
            [
                'name' => 'Glacite Jewel',
                'apiName' => 'GLACITE_JEWEL',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Golden Plate',
                'apiName' => 'GOLDEN_PLATE',
                'rarity' => 'RARE',
                'duration' => '6 hours',
            ],
            [
                'name' => 'Enchanted Gold Block',
                'apiName' => 'ENCHANTED_GOLD_BLOCK',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Gold',
                'apiName' => 'ENCHANTED_GOLD',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Gold Ingot',
                'apiName' => 'GOLD_INGOT',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Drill Motor',
                'apiName' => 'DRILL_ENGINE',
                'rarity' => 'RARE',
                'duration' => '1 day, 6 hours',
            ],
            [
                'name' => 'Enchanted Iron Block',
                'apiName' => 'ENCHANTED_IRON_BLOCK',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Iron',
                'apiName' => 'ENCHANTED_IRON',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Iron Ingot',
                'apiName' => 'IRON_INGOT',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Redstone Block',
                'apiName' => 'ENCHANTED_REDSTONE_BLOCK',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Redstone',
                'apiName' => 'ENCHANTED_REDSTONE',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Redstone Dust',
                'apiName' => 'REDSTONE_DUST',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Treasurite',
                'apiName' => 'TREASURITE',
                'rarity' => 'EPIC',
                'duration' => null,
            ],
            [
                'name' => 'Gemstone Mixture',
                'apiName' => 'GEMSTONE_MIXTURE',
                'rarity' => 'RARE',
                'duration' => '4 hours',
            ],
            [
                'name' => 'Sludge Juice',
                'apiName' => 'SLUDGE_JUICE',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Jade Gem',
                'apiName' => 'FINE_JADE_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Jade Gem',
                'apiName' => 'FLAWED_JADE_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Jade Gem',
                'apiName' => 'ROUGH_JADE_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Amethyst Gem',
                'apiName' => 'FINE_AMETHYST_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Amethyst Gem',
                'apiName' => 'FLAWED_AMETHYST_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Amethyst Gem',
                'apiName' => 'ROUGH_AMETHYST_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Amber Gem',
                'apiName' => 'FINE_AMBER_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Amber Gem',
                'apiName' => 'FLAWED_AMBER_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Amber Gem',
                'apiName' => 'ROUGH_AMBER_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Sapphire Gem',
                'apiName' => 'FINE_SAPPHIRE_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Sapphire Gem',
                'apiName' => 'FLAWED_SAPPHIRE_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Sapphire Gem',
                'apiName' => 'ROUGH_SAPPHIRE_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Glacite Amalgamation',
                'apiName' => 'GLACITE_AMALGAMATION',
                'rarity' => 'EPIC',
                'duration' => '4 hours',
            ],
            [
                'name' => 'Fine Onyx Gem',
                'apiName' => 'FINE_ONYX_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Onyx Gem',
                'apiName' => 'FLAWED_ONYX_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Onyx Gem',
                'apiName' => 'ROUGH_ONYX_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Citrine Gem',
                'apiName' => 'FINE_CITRINE_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Citrine Gem',
                'apiName' => 'FLAWED_CITRINE_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Citrine Gem',
                'apiName' => 'ROUGH_CITRINE_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Peridot Gem',
                'apiName' => 'FINE_PERIDOT_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Peridot Gem',
                'apiName' => 'FLAWED_PERIDOT_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Peridot Gem',
                'apiName' => 'ROUGH_PERIDOT_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Fine Aquamarine Gem',
                'apiName' => 'FINE_AQUAMARINE_GEM',
                'rarity' => 'RARE',
                'duration' => null,
            ],
            [
                'name' => 'Flawed Aquamarine Gem',
                'apiName' => 'FLAWED_AQUAMARINE_GEM',
                'rarity' => 'UNCOMMON',
                'duration' => null,
            ],
            [
                'name' => 'Rough Aquamarine Gem',
                'apiName' => 'ROUGH_AQUAMARINE_GEM',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Enchanted Glacite',
                'apiName' => 'ENCHANTED_GLACITE',
                'rarity' => 'EPIC',
                'duration' => null,
            ],
            [
                'name' => 'Glacite',
                'apiName' => 'GLACITE',
                'rarity' => 'COMMON',
                'duration' => null,
            ],
            [
                'name' => 'Mithril Plate',
                'apiName' => 'MITHRIL_PLATE',
                'rarity' => 'RARE',
                'duration' => '18 hours',
            ],
            [
                'name' => 'Tungsten Plate',
                'apiName' => 'TUNGSTEN_PLATE',
                'rarity' => 'RARE',
                'duration' => '3 hours',
            ],
            [
                'name' => 'Umber Plate',
                'apiName' => 'UMBER_PLATE',
                'rarity' => 'RARE',
                'duration' => '3 hours',
            ],
            [
                'name' => 'Perfect Plate',
                'apiName' => 'PERFECT_PLATE',
                'rarity' => 'LEGENDARY',
                'duration' => '30 minutes',
            ],
        ]);

        // Gem relationships
        $gemTypes = ['JADE', 'AMETHYST', 'AMBER', 'SAPPHIRE', 'ONYX', 'CITRINE', 'PERIDOT', 'AQUAMARINE'];

        foreach ($gemTypes as $gemType) {
            $fineGem = Item::where('apiName', "FINE_{$gemType}_GEM")->first();
            $flawedGem = Item::where('apiName', "FLAWED_{$gemType}_GEM")->first();
            $roughGem = Item::where('apiName', "ROUGH_{$gemType}_GEM")->first();

            $fineGem->craftingItems()->attach($flawedGem->id, ['quantity' => 80]);
            $flawedGem->craftingItems()->attach($roughGem->id, ['quantity' => 80]);
        }

        // Bejeweled Handle
        $bejeweledHandle = Item::where('apiName', 'BEJEWELED_HANDLE')->first();
        $glaciteJewel = Item::where('apiName', 'GLACITE_JEWEL')->first();
        $bejeweledHandle->craftingItems()->attach($glaciteJewel->id, ['quantity' => 3]);

        // Mithril
        $refinedMithril = Item::where('apiName', 'REFINED_MITHRIL')->first();
        $enchantedMithril = Item::where('apiName', 'ENCHANTED_MITHRIL')->first();
        $mithril = Item::where('apiName', 'MITHRIL')->first();
        $refinedMithril->craftingItems()->attach($enchantedMithril->id, ['quantity' => 160]);
        $enchantedMithril->craftingItems()->attach($mithril->id, ['quantity' => 160]);

        // Diamond
        $refinedDiamond = Item::where('apiName', 'REFINED_DIAMOND')->first();
        $enchantedDiamondBlock = Item::where('apiName', 'ENCHANTED_DIAMOND_BLOCK')->first();
        $enchantedDiamond = Item::where('apiName', 'ENCHANTED_DIAMOND')->first();
        $diamond = Item::where('apiName', 'DIAMOND')->first();
        $refinedDiamond->craftingItems()->attach($enchantedDiamondBlock->id, ['quantity' => 2]);
        $enchantedDiamondBlock->craftingItems()->attach($enchantedDiamond->id, ['quantity' => 160]);
        $enchantedDiamond->craftingItems()->attach($diamond->id, ['quantity' => 160]);

        // Titanium
        $refinedTitanium = Item::where('apiName', 'REFINED_TITANIUM')->first();
        $enchantedTitanium = Item::where('apiName', 'ENCHANTED_TITANIUM')->first();
        $titanium = Item::where('apiName', 'TITANIUM')->first();
        $refinedTitanium->craftingItems()->attach($enchantedTitanium->id, ['quantity' => 16]);
        $enchantedTitanium->craftingItems()->attach($titanium->id, ['quantity' => 160]);

        // Umber
        $refinedUmber = Item::where('apiName', 'REFINED_UMBER')->first();
        $enchantedUmber = Item::where('apiName', 'ENCHANTED_UMBER')->first();
        $umber = Item::where('apiName', 'UMBER')->first();
        $refinedUmber->craftingItems()->attach($enchantedUmber->id, ['quantity' => 160]);
        $enchantedUmber->craftingItems()->attach($umber->id, ['quantity' => 160]);

        // Tungsten
        $refinedTungsten = Item::where('apiName', 'REFINED_TUNGSTEN')->first();
        $enchantedTungsten = Item::where('apiName', 'ENCHANTED_TUNGSTEN')->first();
        $tungsten = Item::where('apiName', 'TUNGSTEN')->first();
        $refinedTungsten->craftingItems()->attach($enchantedTungsten->id, ['quantity' => 160]);
        $enchantedTungsten->craftingItems()->attach($tungsten->id, ['quantity' => 160]);

        // Gold
        $goldenPlate = Item::where('apiName', 'GOLDEN_PLATE')->first();
        $enchantedGoldBlock = Item::where('apiName', 'ENCHANTED_GOLD_BLOCK')->first();
        $enchantedGold = Item::where('apiName', 'ENCHANTED_GOLD')->first();
        $goldIngot = Item::where('apiName', 'GOLD_INGOT')->first();
        $goldenPlate->craftingItems()->attach([
            $enchantedGoldBlock->id => ['quantity' => 2],
            $refinedDiamond->id => ['quantity' => 1],
            $glaciteJewel->id => ['quantity' => 5],
        ]);
        $enchantedGoldBlock->craftingItems()->attach($enchantedGold->id, ['quantity' => 160]);
        $enchantedGold->craftingItems()->attach($goldIngot->id, ['quantity' => 160]);

        // Iron
        $enchantedIronBlock = Item::where('apiName', 'ENCHANTED_IRON_BLOCK')->first();
        $enchantedIron = Item::where('apiName', 'ENCHANTED_IRON')->first();
        $ironIngot = Item::where('apiName', 'IRON_INGOT')->first();
        $enchantedIronBlock->craftingItems()->attach($enchantedIron->id, ['quantity' => 160]);
        $enchantedIron->craftingItems()->attach($ironIngot->id, ['quantity' => 160]);

        // Redstone
        $enchantedRedstoneBlock = Item::where('apiName', 'ENCHANTED_REDSTONE_BLOCK')->first();
        $enchantedRedstone = Item::where('apiName', 'ENCHANTED_REDSTONE')->first();
        $redstoneDust = Item::where('apiName', 'REDSTONE_DUST')->first();
        $enchantedRedstoneBlock->craftingItems()->attach($enchantedRedstone->id, ['quantity' => 160]);
        $enchantedRedstone->craftingItems()->attach($redstoneDust->id, ['quantity' => 160]);

        // Drill Motor
        $drillMotor = Item::where('apiName', 'DRILL_ENGINE')->first();
        $treasurite = Item::where('apiName', 'TREASURITE')->first();
        $drillMotor->craftingItems()->attach([
            $enchantedIronBlock->id => ['quantity' => 1],
            $enchantedRedstoneBlock->id => ['quantity' => 3],
            $goldenPlate->id => ['quantity' => 1],
            $treasurite->id => ['quantity' => 10],
        ]);

        // Gemstone Mixture
        $gemstoneMixture = Item::where('apiName', 'GEMSTONE_MIXTURE')->first();
        $sludgeJuice = Item::where('apiName', 'SLUDGE_JUICE')->first();
        $fineJade = Item::where('apiName', 'FINE_JADE_GEM')->first();
        $fineAmethyst = Item::where('apiName', 'FINE_AMETHYST_GEM')->first();
        $fineAmber = Item::where('apiName', 'FINE_AMBER_GEM')->first();
        $fineSapphire = Item::where('apiName', 'FINE_SAPPHIRE_GEM')->first();
        $gemstoneMixture->craftingItems()->attach([
            $sludgeJuice->id => ['quantity' => 320],
            $fineJade->id => ['quantity' => 4],
            $fineAmethyst->id => ['quantity' => 4],
            $fineAmber->id => ['quantity' => 4],
            $fineSapphire->id => ['quantity' => 4],
        ]);

        // Glacite
        $enchantedGlacite = Item::where('apiName', 'ENCHANTED_GLACITE')->first();
        $glacite = Item::where('apiName', 'GLACITE')->first();
        $enchantedGlacite->craftingItems()->attach($glacite->id, ['quantity' => 160]);

        // Glacite Amalgamation
        $glaciteAmalgamation = Item::where('apiName', 'GLACITE_AMALGAMATION')->first();
        $fineOnyx = Item::where('apiName', 'FINE_ONYX_GEM')->first();
        $fineCitrine = Item::where('apiName', 'FINE_CITRINE_GEM')->first();
        $finePeridot = Item::where('apiName', 'FINE_PERIDOT_GEM')->first();
        $fineAquamarine = Item::where('apiName', 'FINE_AQUAMARINE_GEM')->first();
        $glaciteAmalgamation->craftingItems()->attach([
            $enchantedGlacite->id => ['quantity' => 256],
            $fineOnyx->id => ['quantity' => 4],
            $fineCitrine->id => ['quantity' => 4],
            $finePeridot->id => ['quantity' => 4],
            $fineAquamarine->id => ['quantity' => 4],
        ]);

        // Mithril Plate
        $mithrilPlate = Item::where('apiName', 'MITHRIL_PLATE')->first();
        $mithrilPlate->craftingItems()->attach([
            $refinedMithril->id => ['quantity' => 5],
            $goldenPlate->id => ['quantity' => 1],
            $enchantedIronBlock->id => ['quantity' => 1],
            $refinedTitanium->id => ['quantity' => 5],
        ]);

        // Tungsten Plate
        $tungstenPlate = Item::where('apiName', 'TUNGSTEN_PLATE')->first();
        $tungstenPlate->craftingItems()->attach([
            $refinedTungsten->id => ['quantity' => 4],
            $glaciteAmalgamation->id => ['quantity' => 1],
        ]);

        // Umber Plate
        $umberPlate = Item::where('apiName', 'UMBER_PLATE')->first();
        $umberPlate->craftingItems()->attach([
            $refinedUmber->id => ['quantity' => 4],
            $glaciteAmalgamation->id => ['quantity' => 1],
        ]);

        // Perfect Plate
        $perfectPlate = Item::where('apiName', 'PERFECT_PLATE')->first();
        $perfectPlate->craftingItems()->attach([
            $umberPlate->id => ['quantity' => 1],
            $tungstenPlate->id => ['quantity' => 1],
            $mithrilPlate->id => ['quantity' => 1],
        ]);
    }
}
