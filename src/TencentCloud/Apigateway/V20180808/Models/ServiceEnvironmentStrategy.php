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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service environment policy
 *
 * @method string getEnvironmentName() Obtain Environment name.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name.
 * @method string getUrl() Obtain Access service environment URL.
 * @method void setUrl(string $Url) Set Access service environment URL.
 * @method integer getStatus() Obtain Release status.
 * @method void setStatus(integer $Status) Set Release status.
 * @method string getVersionName() Obtain Published version number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVersionName(string $VersionName) Set Published version number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategy() Obtain Throttling value.
 * @method void setStrategy(integer $Strategy) Set Throttling value.
 * @method integer getMaxStrategy() Obtain Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxStrategy(integer $MaxStrategy) Set Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ServiceEnvironmentStrategy extends AbstractModel
{
    /**
     * @var string Environment name.
     */
    public $EnvironmentName;

    /**
     * @var string Access service environment URL.
     */
    public $Url;

    /**
     * @var integer Release status.
     */
    public $Status;

    /**
     * @var string Published version number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VersionName;

    /**
     * @var integer Throttling value.
     */
    public $Strategy;

    /**
     * @var integer Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxStrategy;

    /**
     * @param string $EnvironmentName Environment name.
     * @param string $Url Access service environment URL.
     * @param integer $Status Release status.
     * @param string $VersionName Published version number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Strategy Throttling value.
     * @param integer $MaxStrategy Maximum quota value
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("MaxStrategy",$param) and $param["MaxStrategy"] !== null) {
            $this->MaxStrategy = $param["MaxStrategy"];
        }
    }
}
