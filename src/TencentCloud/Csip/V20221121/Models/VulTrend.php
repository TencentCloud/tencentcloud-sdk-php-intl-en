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
 * Vulnerability trends, attack trend, users affected, affect assets.
 *
 * @method integer getAffectAssetCount() Obtain Number of affected assets.
 * @method void setAffectAssetCount(integer $AffectAssetCount) Set Number of affected assets.
 * @method integer getAffectUserCount() Obtain Number of users affected.
 * @method void setAffectUserCount(integer $AffectUserCount) Set Number of users affected.
 * @method integer getAttackCount() Obtain Number of attacks.
 * @method void setAttackCount(integer $AttackCount) Set Number of attacks.
 * @method string getDate() Obtain Time
 * @method void setDate(string $Date) Set Time
 */
class VulTrend extends AbstractModel
{
    /**
     * @var integer Number of affected assets.
     */
    public $AffectAssetCount;

    /**
     * @var integer Number of users affected.
     */
    public $AffectUserCount;

    /**
     * @var integer Number of attacks.
     */
    public $AttackCount;

    /**
     * @var string Time
     */
    public $Date;

    /**
     * @param integer $AffectAssetCount Number of affected assets.
     * @param integer $AffectUserCount Number of users affected.
     * @param integer $AttackCount Number of attacks.
     * @param string $Date Time
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
        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("AffectUserCount",$param) and $param["AffectUserCount"] !== null) {
            $this->AffectUserCount = $param["AffectUserCount"];
        }

        if (array_key_exists("AttackCount",$param) and $param["AttackCount"] !== null) {
            $this->AttackCount = $param["AttackCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
