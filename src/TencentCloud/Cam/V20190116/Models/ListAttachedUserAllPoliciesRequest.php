<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttachedUserAllPolicies request structure.
 *
 * @method integer getTargetUin() Obtain Target user ID.
 * @method void setTargetUin(integer $TargetUin) Set Target user ID.
 * @method integer getRp() Obtain The number of policies displayed on each page. Value range: 1-200.
 * @method void setRp(integer $Rp) Set The number of policies displayed on each page. Value range: 1-200.
 * @method integer getPage() Obtain Page number. Value range: 1-200.
 * @method void setPage(integer $Page) Set Page number. Value range: 1-200.
 * @method integer getAttachType() Obtain `0`: return policies that are directly associated and inherited from the user group; `1`: return policies that are directly associated; `2`: return policies inherited from the user group.
 * @method void setAttachType(integer $AttachType) Set `0`: return policies that are directly associated and inherited from the user group; `1`: return policies that are directly associated; `2`: return policies inherited from the user group.
 * @method integer getStrategyType() Obtain Policy type.
 * @method void setStrategyType(integer $StrategyType) Set Policy type.
 * @method string getKeyword() Obtain Keyword for searching.
 * @method void setKeyword(string $Keyword) Set Keyword for searching.
 */
class ListAttachedUserAllPoliciesRequest extends AbstractModel
{
    /**
     * @var integer Target user ID.
     */
    public $TargetUin;

    /**
     * @var integer The number of policies displayed on each page. Value range: 1-200.
     */
    public $Rp;

    /**
     * @var integer Page number. Value range: 1-200.
     */
    public $Page;

    /**
     * @var integer `0`: return policies that are directly associated and inherited from the user group; `1`: return policies that are directly associated; `2`: return policies inherited from the user group.
     */
    public $AttachType;

    /**
     * @var integer Policy type.
     */
    public $StrategyType;

    /**
     * @var string Keyword for searching.
     */
    public $Keyword;

    /**
     * @param integer $TargetUin Target user ID.
     * @param integer $Rp The number of policies displayed on each page. Value range: 1-200.
     * @param integer $Page Page number. Value range: 1-200.
     * @param integer $AttachType `0`: return policies that are directly associated and inherited from the user group; `1`: return policies that are directly associated; `2`: return policies inherited from the user group.
     * @param integer $StrategyType Policy type.
     * @param string $Keyword Keyword for searching.
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
