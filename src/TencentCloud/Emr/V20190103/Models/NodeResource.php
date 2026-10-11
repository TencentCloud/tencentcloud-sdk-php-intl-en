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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifications management, which includes the specifications type description.
 *
 * @method integer getResourceConfigId() Obtain <p>Configuration ID.</p>
 * @method void setResourceConfigId(integer $ResourceConfigId) Set <p>Configuration ID.</p>
 * @method Resource getResource() Obtain <p>Resource</p>
 * @method void setResource(Resource $Resource) Set <p>Resource</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method string getIsDefault() Obtain <p>Whether the default configuration applies. Valid values: DEFAULT and BACKUP.</p>
 * @method void setIsDefault(string $IsDefault) Set <p>Whether the default configuration applies. Valid values: DEFAULT and BACKUP.</p>
 * @method integer getMaxResourceNum() Obtain <p>Remaining of this type.</p>
 * @method void setMaxResourceNum(integer $MaxResourceNum) Set <p>Remaining of this type.</p>
 * @method array getPrepaidUnderwritePeriods() Obtain <p>Supported committed use duration.</p>
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) Set <p>Supported committed use duration.</p>
 * @method integer getQuotaNum() Obtain <p>Number of quotas.</p>
 * @method void setQuotaNum(integer $QuotaNum) Set <p>Number of quotas.</p>
 * @method string getQuotaUnit() Obtain <p>Quota unit.</p>
 * @method void setQuotaUnit(string $QuotaUnit) Set <p>Quota unit.</p>
 */
class NodeResource extends AbstractModel
{
    /**
     * @var integer <p>Configuration ID.</p>
     */
    public $ResourceConfigId;

    /**
     * @var Resource <p>Resource</p>
     */
    public $Resource;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Whether the default configuration applies. Valid values: DEFAULT and BACKUP.</p>
     */
    public $IsDefault;

    /**
     * @var integer <p>Remaining of this type.</p>
     */
    public $MaxResourceNum;

    /**
     * @var array <p>Supported committed use duration.</p>
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var integer <p>Number of quotas.</p>
     */
    public $QuotaNum;

    /**
     * @var string <p>Quota unit.</p>
     */
    public $QuotaUnit;

    /**
     * @param integer $ResourceConfigId <p>Configuration ID.</p>
     * @param Resource $Resource <p>Resource</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param string $IsDefault <p>Whether the default configuration applies. Valid values: DEFAULT and BACKUP.</p>
     * @param integer $MaxResourceNum <p>Remaining of this type.</p>
     * @param array $PrepaidUnderwritePeriods <p>Supported committed use duration.</p>
     * @param integer $QuotaNum <p>Number of quotas.</p>
     * @param string $QuotaUnit <p>Quota unit.</p>
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
        if (array_key_exists("ResourceConfigId",$param) and $param["ResourceConfigId"] !== null) {
            $this->ResourceConfigId = $param["ResourceConfigId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("MaxResourceNum",$param) and $param["MaxResourceNum"] !== null) {
            $this->MaxResourceNum = $param["MaxResourceNum"];
        }

        if (array_key_exists("PrepaidUnderwritePeriods",$param) and $param["PrepaidUnderwritePeriods"] !== null) {
            $this->PrepaidUnderwritePeriods = $param["PrepaidUnderwritePeriods"];
        }

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUnit",$param) and $param["QuotaUnit"] !== null) {
            $this->QuotaUnit = $param["QuotaUnit"];
        }
    }
}
