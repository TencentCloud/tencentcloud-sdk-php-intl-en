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
 * Authorization status summary of each billing item
 *
 * @method string getResourceId() Obtain <p>Resource ID</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID</p>
 * @method string getLicenseType() Obtain <p>Authorization type (ENTERPRISE_HP=flagship edition/ADVANCED_HP=pro edition/RASP)</p>
 * @method void setLicenseType(string $LicenseType) Set <p>Authorization type (ENTERPRISE_HP=flagship edition/ADVANCED_HP=pro edition/RASP)</p>
 * @method string getName() Obtain <p>Authorization name (flagship edition/pro edition/RASP)</p>
 * @method void setName(string $Name) Set <p>Authorization name (flagship edition/pro edition/RASP)</p>
 * @method integer getCategory() Obtain <p>Authorization type. 0: host authorization. 1: RASP authorization.</p>
 * @method void setCategory(integer $Category) Set <p>Authorization type. 0: host authorization. 1: RASP authorization.</p>
 * @method integer getTotalNum() Obtain <p>Total.</p>
 * @method void setTotalNum(integer $TotalNum) Set <p>Total.</p>
 * @method integer getUsedNum() Obtain <p>Used</p>
 * @method void setUsedNum(integer $UsedNum) Set <p>Used</p>
 * @method integer getRemainNum() Obtain <p>Remaining</p>
 * @method void setRemainNum(integer $RemainNum) Set <p>Remaining</p>
 * @method string getBeginTime() Obtain <p>Earliest start time (format: 2006-01-02 15:04:05)</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Earliest start time (format: 2006-01-02 15:04:05)</p>
 * @method string getEndTime() Obtain <p>Latest expiration time (format: 2006-01-02 15:04:05)</p>
 * @method void setEndTime(string $EndTime) Set <p>Latest expiration time (format: 2006-01-02 15:04:05)</p>
 */
class LicenseStatusItem extends AbstractModel
{
    /**
     * @var string <p>Resource ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Authorization type (ENTERPRISE_HP=flagship edition/ADVANCED_HP=pro edition/RASP)</p>
     */
    public $LicenseType;

    /**
     * @var string <p>Authorization name (flagship edition/pro edition/RASP)</p>
     */
    public $Name;

    /**
     * @var integer <p>Authorization type. 0: host authorization. 1: RASP authorization.</p>
     */
    public $Category;

    /**
     * @var integer <p>Total.</p>
     */
    public $TotalNum;

    /**
     * @var integer <p>Used</p>
     */
    public $UsedNum;

    /**
     * @var integer <p>Remaining</p>
     */
    public $RemainNum;

    /**
     * @var string <p>Earliest start time (format: 2006-01-02 15:04:05)</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Latest expiration time (format: 2006-01-02 15:04:05)</p>
     */
    public $EndTime;

    /**
     * @param string $ResourceId <p>Resource ID</p>
     * @param string $LicenseType <p>Authorization type (ENTERPRISE_HP=flagship edition/ADVANCED_HP=pro edition/RASP)</p>
     * @param string $Name <p>Authorization name (flagship edition/pro edition/RASP)</p>
     * @param integer $Category <p>Authorization type. 0: host authorization. 1: RASP authorization.</p>
     * @param integer $TotalNum <p>Total.</p>
     * @param integer $UsedNum <p>Used</p>
     * @param integer $RemainNum <p>Remaining</p>
     * @param string $BeginTime <p>Earliest start time (format: 2006-01-02 15:04:05)</p>
     * @param string $EndTime <p>Latest expiration time (format: 2006-01-02 15:04:05)</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("RemainNum",$param) and $param["RemainNum"] !== null) {
            $this->RemainNum = $param["RemainNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
