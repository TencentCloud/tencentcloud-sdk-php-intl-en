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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLicenseBinds request structure.
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method boolean getIsAll() Obtain Whether all machines are involved. (If the total number of machines exceeds the available authorizations in the current order, some machines will be skipped.)
 * @method void setIsAll(boolean $IsAll) Set Whether all machines are involved. (If the total number of machines exceeds the available authorizations in the current order, some machines will be skipped.)
 * @method array getQuuidList() Obtain List of QUUIDs of machines to be bound. This parameter is required when IsAll is set to false. Otherwise, it is ignored. Maximum number: 2,000.
 * @method void setQuuidList(array $QuuidList) Set List of QUUIDs of machines to be bound. This parameter is required when IsAll is set to false. Otherwise, it is ignored. Maximum number: 2,000.
 */
class ModifyLicenseBindsRequest extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var boolean Whether all machines are involved. (If the total number of machines exceeds the available authorizations in the current order, some machines will be skipped.)
     */
    public $IsAll;

    /**
     * @var array List of QUUIDs of machines to be bound. This parameter is required when IsAll is set to false. Otherwise, it is ignored. Maximum number: 2,000.
     */
    public $QuuidList;

    /**
     * @param string $ResourceId Resource ID
     * @param integer $LicenseType Authorization type
     * @param boolean $IsAll Whether all machines are involved. (If the total number of machines exceeds the available authorizations in the current order, some machines will be skipped.)
     * @param array $QuuidList List of QUUIDs of machines to be bound. This parameter is required when IsAll is set to false. Otherwise, it is ignored. Maximum number: 2,000.
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

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }
    }
}
