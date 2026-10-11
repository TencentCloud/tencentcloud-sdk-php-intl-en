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
 * 
 *
 * @method string getServiceName() Obtain 
 * @method void setServiceName(string $ServiceName) Set 
 * @method string getClassification() Obtain 
 * @method void setClassification(string $Classification) Set 
 * @method string getServiceVersion() Obtain 
 * @method void setServiceVersion(string $ServiceVersion) Set 
 * @method string getProperties() Obtain 
 * @method void setProperties(string $Properties) Set 
 */
class ExportConfMeta extends AbstractModel
{
    /**
     * @var string 
     */
    public $ServiceName;

    /**
     * @var string 
     */
    public $Classification;

    /**
     * @var string 
     */
    public $ServiceVersion;

    /**
     * @var string 
     */
    public $Properties;

    /**
     * @param string $ServiceName 
     * @param string $Classification 
     * @param string $ServiceVersion 
     * @param string $Properties 
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("ServiceVersion",$param) and $param["ServiceVersion"] !== null) {
            $this->ServiceVersion = $param["ServiceVersion"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }
    }
}
