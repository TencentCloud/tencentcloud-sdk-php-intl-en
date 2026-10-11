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
 * Specifies the context structure in which the configuration needs to be exported.
 *
 * @method integer getServiceType() Obtain <p>Service configuration.</p>
 * @method void setServiceType(integer $ServiceType) Set <p>Service configuration.</p>
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getServiceName() Obtain <p>Service name.</p>
 * @method void setServiceName(string $ServiceName) Set <p>Service name.</p>
 */
class ExportConfContext extends AbstractModel
{
    /**
     * @var integer <p>Service configuration.</p>
     */
    public $ServiceType;

    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>Service name.</p>
     */
    public $ServiceName;

    /**
     * @param integer $ServiceType <p>Service configuration.</p>
     * @param string $FileName <p>File name.</p>
     * @param string $ServiceName <p>Service name.</p>
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
