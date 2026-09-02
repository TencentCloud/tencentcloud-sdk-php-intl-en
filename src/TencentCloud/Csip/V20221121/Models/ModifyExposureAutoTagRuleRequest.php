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
 * ModifyExposureAutoTagRule request structure.
 *
 * @method string getRuleName() Obtain <p>rule name</p>
 * @method void setRuleName(string $RuleName) Set <p>rule name</p>
 * @method string getTag() Obtain <p>Tag.</p>
 * @method void setTag(string $Tag) Set <p>Tag.</p>
 * @method integer getRuleID() Obtain <p>Rule ID.</p>
 * @method void setRuleID(integer $RuleID) Set <p>Rule ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getDescription() Obtain <p>Rule description</p>
 * @method void setDescription(string $Description) Set <p>Rule description</p>
 * @method boolean getEnable() Obtain <p>Enabled status</p>
 * @method void setEnable(boolean $Enable) Set <p>Enabled status</p>
 * @method array getAssetTypes() Obtain <p>Asset type</p>
 * @method void setAssetTypes(array $AssetTypes) Set <p>Asset type</p>
 * @method array getPorts() Obtain <p>Port</p>
 * @method void setPorts(array $Ports) Set <p>Port</p>
 * @method array getOpenStatuses() Obtain <p>Open status</p>
 * @method void setOpenStatuses(array $OpenStatuses) Set <p>Open status</p>
 * @method boolean getApplyNow() Obtain <p>Whether to execute tagging immediately</p>
 * @method void setApplyNow(boolean $ApplyNow) Set <p>Whether to execute tagging immediately</p>
 */
class ModifyExposureAutoTagRuleRequest extends AbstractModel
{
    /**
     * @var string <p>rule name</p>
     */
    public $RuleName;

    /**
     * @var string <p>Tag.</p>
     */
    public $Tag;

    /**
     * @var integer <p>Rule ID.</p>
     */
    public $RuleID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Rule description</p>
     */
    public $Description;

    /**
     * @var boolean <p>Enabled status</p>
     */
    public $Enable;

    /**
     * @var array <p>Asset type</p>
     */
    public $AssetTypes;

    /**
     * @var array <p>Port</p>
     */
    public $Ports;

    /**
     * @var array <p>Open status</p>
     */
    public $OpenStatuses;

    /**
     * @var boolean <p>Whether to execute tagging immediately</p>
     */
    public $ApplyNow;

    /**
     * @param string $RuleName <p>rule name</p>
     * @param string $Tag <p>Tag.</p>
     * @param integer $RuleID <p>Rule ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Description <p>Rule description</p>
     * @param boolean $Enable <p>Enabled status</p>
     * @param array $AssetTypes <p>Asset type</p>
     * @param array $Ports <p>Port</p>
     * @param array $OpenStatuses <p>Open status</p>
     * @param boolean $ApplyNow <p>Whether to execute tagging immediately</p>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AssetTypes",$param) and $param["AssetTypes"] !== null) {
            $this->AssetTypes = $param["AssetTypes"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("OpenStatuses",$param) and $param["OpenStatuses"] !== null) {
            $this->OpenStatuses = $param["OpenStatuses"];
        }

        if (array_key_exists("ApplyNow",$param) and $param["ApplyNow"] !== null) {
            $this->ApplyNow = $param["ApplyNow"];
        }
    }
}
