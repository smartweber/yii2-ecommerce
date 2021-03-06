<?php

use yii\db\Migration;

/**
 * Handles the creation of table `currency_symbols`.
 */
class m171211_133623_create_currency_symbol_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%currency_symbol}}', [
            'id' => $this->bigPrimaryKey()->unsigned(),
            'name' => $this->string(255),
            'symbol' => $this->string(255),
        ], $tableOptions);

        $this->batchInsert('{{%currency_symbol}}', ['name', 'symbol'],
            [
                ['aed', '&#1583;.&#1573;'],
                ['afn', '&#65;&#102;'],
                ['all', '&#76;&#101;&#107;'],
                ['amd', ''],
                ['ang', '&#402;'],
                ['aoa', '&#75;&#122;'],
                ['ars', '&#36;'],
                ['aud', '&#36;'],
                ['awg', '&#402;'],
                ['azn', '&#1084;&#1072;&#1085;'],
                ['bam', '&#75;&#77;'],
                ['bbd', '&#36;'],
                ['bdt', '&#2547;'],
                ['bgn', '&#1083;&#1074;'],
                ['bhd', '.&#1583;.&#1576;'],
                ['bif', '&#70;&#66;&#117;'],
                ['bmd', '&#36;'],
                ['bnd', '&#36;'],
                ['bob', '&#36;&#98;'],
                ['brl', '&#82;&#36;'],
                ['bsd', '&#36;'],
                ['btn', '&#78;&#117;&#46;'],
                ['bwp', '&#80;'],
                ['byr', '&#112;&#46;'],
                ['bzd', '&#66;&#90;&#36;'],
                ['cad', '&#36;'],
                ['cdf', '&#70;&#67;'],
                ['chf', '&#67;&#72;&#70;'],
                ['clf', ''],
                ['clp', '&#36;'],
                ['cny', '&#165;'],
                ['cop', '&#36;'],
                ['crc', '&#8353;'],
                ['cup', '&#8396;'],
                ['cve', '&#36;'],
                ['czk', '&#75;&#269;'],
                ['djf', '&#70;&#100;&#106;'],
                ['dkk', '&#107;&#114;'],
                ['dop', '&#82;&#68;&#36;'],
                ['dzd', '&#1583;&#1580;'],
                ['egp', '&#163;'],
                ['etb', '&#66;&#114;'],
                ['eur', '&#8364;'],
                ['fjd', '&#36;'],
                ['fkp', '&#163;'],
                ['gbp', '&#163;'],
                ['gel', '&#4314;'],
                ['ghs', '&#162;'],
                ['gip', '&#163;'],
                ['gmd', '&#68;'],
                ['gnf', '&#70;&#71;'],
                ['gtq', '&#81;'],
                ['gyd', '&#36;'],
                ['hkd', '&#36;'],
                ['hnl', '&#76;'],
                ['hrk', '&#107;&#110;'],
                ['htg', '&#71;'],
                ['huf', '&#70;&#116;'],
                ['idr', '&#82;&#112;'],
                ['ils', '&#8362;'],
                ['inr', '&#8377;'],
                ['iqd', '&#1593;.&#1583;'],
                ['irr', '&#65020;'],
                ['isk', '&#107;&#114;'],
                ['jep', '&#163;'],
                ['jmd', '&#74;&#36;'],
                ['jod', '&#74;&#68;'],
                ['jpy', '&#165;'],
                ['kes', '&#75;&#83;&#104;'],
                ['kgs', '&#1083;&#1074;'],
                ['khr', '&#6107;'],
                ['kmf', '&#67;&#70;'],
                ['kpw', '&#8361;'],
                ['krw', '&#8361;'],
                ['kwd', '&#1583;.&#1603;'],
                ['kyd', '&#36;'],
                ['kzt', '&#1083;&#1074;'],
                ['lak', '&#8365;'],
                ['lbp', '&#163;'],
                ['lkr', '&#8360;'],
                ['lrd', '&#36;'],
                ['lsl', '&#76;'],
                ['ltl', '&#76;&#116;'],
                ['lvl', '&#76;&#115;'],
                ['lyd', '&#1604;.&#1583;'],
                ['mad', '&#1583;.&#1605;.'],
                ['mdl', '&#76;'],
                ['mga', '&#65;&#114;'],
                ['mkd', '&#1076;&#1077;&#1085;'],
                ['mmk', '&#75;'],
                ['mnt', '&#8366;'],
                ['mop', '&#77;&#79;&#80;&#36;'],
                ['mro', '&#85;&#77;'],
                ['mur', '&#8360;'],
                ['mvr', '.&#1923;'],
                ['mwk', '&#77;&#75;'],
                ['mxn', '&#36;'],
                ['myr', '&#82;&#77;'],
                ['mzn', '&#77;&#84;'],
                ['nad', '&#36;'],
                ['ngn', '&#8358;'],
                ['nio', '&#67;&#36;'],
                ['nok', '&#107;&#114;'],
                ['npr', '&#8360;'],
                ['nzd', '&#36;'],
                ['omr', '&#65020;'],
                ['pab', '&#66;&#47;&#46;'],
                ['pen', '&#83;&#47;&#46;'],
                ['pgk', '&#75;'],
                ['php', '&#8369;'],
                ['pkr', '&#8360;'],
                ['pln', '&#122;&#322;'],
                ['pyg', '&#71;&#115;'],
                ['qar', '&#65020;'],
                ['ron', '&#108;&#101;&#105;'],
                ['rsd', '&#1044;&#1080;&#1085;&#46;'],
                ['rub', '&#1088;&#1091;&#1073;'],
                ['rwf', '&#1585;.&#1587;'],
                ['sar', '&#65020;'],
                ['sbd', '&#36;'],
                ['scr', '&#8360;'],
                ['sdg', '&#163;'],
                ['sek', '&#107;&#114;'],
                ['sgd', '&#36;'],
                ['shp', '&#163;'],
                ['sll', '&#76;&#101;'],
                ['sos', '&#83;'],
                ['srd', '&#36;'],
                ['std', '&#68;&#98;'],
                ['svc', '&#36;'],
                ['syp', '&#163;'],
                ['szl', '&#76;'],
                ['thb', '&#3647;'],
                ['tjs', '&#84;&#74;&#83;'],
                ['tmt', '&#109;'],
                ['tnd', '&#1583;.&#1578;'],
                ['top', '&#84;&#36;'],
                ['try', '&#8356;'],
                ['ttd', '&#36;'],
                ['twd', '&#78;&#84;&#36;'],
                ['tzs', ''],
                ['uah', '&#8372;'],
                ['ugx', '&#85;&#83;&#104;'],
                ['usd', '&#36;'],
                ['uyu', '&#36;&#85;'],
                ['uzs', '&#1083;&#1074;'],
                ['vef', '&#66;&#115;'],
                ['vnd', '&#8363;'],
                ['vuv', '&#86;&#84;'],
                ['wst', '&#87;&#83;&#36;'],
                ['xaf', '&#70;&#67;&#70;&#65;'],
                ['xcd', '&#36;'],
                ['xdr', ''],
                ['xof', ''],
                ['xpf', '&#70;'],
                ['yer', '&#65020;'],
                ['zar', '&#82;'],
                ['zmk', '&#90;&#75;'],
                ['zwl', '&#90;&#36;']
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%currency_symbol}}');
    }
}
