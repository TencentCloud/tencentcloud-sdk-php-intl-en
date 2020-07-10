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
 * Information of service release environment.
 *
 * @method string getEnvironmentName() Obtain Environment name.
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name.
 * @method string getUrl() Obtain Access path.
 * @method void setUrl(string $Url) Set Access path.
 * @method integer getStatus() Obtain Release status. 1: published. 0: not published.
 * @method void setStatus(integer $Status) Set Release status. 1: published. 0: not published.
 * @method string getVersionName() Obtain Running version.
 * @method void setVersionName(string $VersionName) Set Running version.
 */
class Environment extends AbstractModel
{
    /**
     * @var string Environment name.
     */
    public $EnvironmentName;

    /**
     * @var string Access path.
     */
    public $Url;

    /**
     * @var integer Release status. 1: published. 0: not published.
     */
    public $Status;

    /**
     * @var string Running version.
     */
    public $VersionName;

    /**
     * @param string $EnvironmentName Environment name.
     * @param string $Url Access path.
     * @param integer $Status Release status. 1: published. 0: not published.
     * @param string $VersionName Running version.
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
    }
}
