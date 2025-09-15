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
 * Component restart policy
 *
 * @method string getName() Obtain Restart policy name
 * @method void setName(string $Name) Set Restart policy name
 * @method string getDisplayName() Obtain Policy display name
 * @method void setDisplayName(string $DisplayName) Set Policy display name
 * @method string getDescribe() Obtain Policy description
 * @method void setDescribe(string $Describe) Set Policy description
 * @method array getBatchSizeRange() Obtain Optional range for the number of batch restarted nodes
 * @method void setBatchSizeRange(array $BatchSizeRange) Set Optional range for the number of batch restarted nodes
 * @method string getIsDefault() Obtain Whether it is the default policy
 * @method void setIsDefault(string $IsDefault) Set Whether it is the default policy
 */
class RestartPolicy extends AbstractModel
{
    /**
     * @var string Restart policy name
     */
    public $Name;

    /**
     * @var string Policy display name
     */
    public $DisplayName;

    /**
     * @var string Policy description
     */
    public $Describe;

    /**
     * @var array Optional range for the number of batch restarted nodes
     */
    public $BatchSizeRange;

    /**
     * @var string Whether it is the default policy
     */
    public $IsDefault;

    /**
     * @param string $Name Restart policy name
     * @param string $DisplayName Policy display name
     * @param string $Describe Policy description
     * @param array $BatchSizeRange Optional range for the number of batch restarted nodes
     * @param string $IsDefault Whether it is the default policy
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("BatchSizeRange",$param) and $param["BatchSizeRange"] !== null) {
            $this->BatchSizeRange = $param["BatchSizeRange"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
