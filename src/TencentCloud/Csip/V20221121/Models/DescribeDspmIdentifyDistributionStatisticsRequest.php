<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmIdentifyDistributionStatistics request structure.
 *
 * @method string getStatType() Obtain <p>Statistics type</p><p>Enumeration values:</p><ul><li>FieldTop5Asset: Top 5 identification fields</li><li>FieldCategoryDistribution: Classification distribution of identification fields</li><li>FieldLevelDistribution: Field level distribution of identification fields</li><li>AssetDistribution: Asset distribution of identification</li></ul>
 * @method void setStatType(string $StatType) Set <p>Statistics type</p><p>Enumeration values:</p><ul><li>FieldTop5Asset: Top 5 identification fields</li><li>FieldCategoryDistribution: Classification distribution of identification fields</li><li>FieldLevelDistribution: Field level distribution of identification fields</li><li>AssetDistribution: Asset distribution of identification</li></ul>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getAssetType() Obtain <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: TencentDB for MySQL</li><li>mariadb: TencentDB for MariaDB</li></ul>
 * @method void setAssetType(string $AssetType) Set <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: TencentDB for MySQL</li><li>mariadb: TencentDB for MariaDB</li></ul>
 * @method integer getComplianceId() Obtain <p>Recognition template id</p>
 * @method void setComplianceId(integer $ComplianceId) Set <p>Recognition template id</p>
 */
class DescribeDspmIdentifyDistributionStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>Statistics type</p><p>Enumeration values:</p><ul><li>FieldTop5Asset: Top 5 identification fields</li><li>FieldCategoryDistribution: Classification distribution of identification fields</li><li>FieldLevelDistribution: Field level distribution of identification fields</li><li>AssetDistribution: Asset distribution of identification</li></ul>
     */
    public $StatType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: TencentDB for MySQL</li><li>mariadb: TencentDB for MariaDB</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>Recognition template id</p>
     */
    public $ComplianceId;

    /**
     * @param string $StatType <p>Statistics type</p><p>Enumeration values:</p><ul><li>FieldTop5Asset: Top 5 identification fields</li><li>FieldCategoryDistribution: Classification distribution of identification fields</li><li>FieldLevelDistribution: Field level distribution of identification fields</li><li>AssetDistribution: Asset distribution of identification</li></ul>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $AssetType <p>Asset type</p><p>Enumeration values:</p><ul><li>cdb: TencentDB for MySQL</li><li>mariadb: TencentDB for MariaDB</li></ul>
     * @param integer $ComplianceId <p>Recognition template id</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
