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
 * Order resources
 *
 * @method integer getId() Obtain Resource primary key ID
 * @method void setId(integer $Id) Set Resource primary key ID
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getBeginTime() Obtain Start time
 * @method void setBeginTime(string $BeginTime) Set Start time
 * @method string getEndTime() Obtain Expiration time
 * @method void setEndTime(string $EndTime) Set Expiration time
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 */
class OrderResource extends AbstractModel
{
    /**
     * @var integer Resource primary key ID
     */
    public $Id;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Start time
     */
    public $BeginTime;

    /**
     * @var string Expiration time
     */
    public $EndTime;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @param integer $Id Resource primary key ID
     * @param string $ResourceId Resource ID
     * @param string $BeginTime Start time
     * @param string $EndTime Expiration time
     * @param integer $LicenseType Authorization type
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }
    }
}
