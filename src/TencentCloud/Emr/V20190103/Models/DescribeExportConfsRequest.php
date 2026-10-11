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
 * DescribeExportConfs request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method array getExportConfContexts() Obtain <p>Configuration to be exported.</p>
 * @method void setExportConfContexts(array $ExportConfContexts) Set <p>Configuration to be exported.</p>
 * @method integer getExportType() Obtain <p>Export type.</p><p>Enumeration values:</p><ul><li>0: all configurations</li><li>1: only custom and modified configurations</li></ul>
 * @method void setExportType(integer $ExportType) Set <p>Export type.</p><p>Enumeration values:</p><ul><li>0: all configurations</li><li>1: only custom and modified configurations</li></ul>
 * @method string getIp() Obtain <p>Node IP address.</p>
 * @method void setIp(string $Ip) Set <p>Node IP address.</p>
 * @method string getConfGroupName() Obtain <p>Configuration group name.</p>
 * @method void setConfGroupName(string $ConfGroupName) Set <p>Configuration group name.</p>
 */
class DescribeExportConfsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Configuration to be exported.</p>
     */
    public $ExportConfContexts;

    /**
     * @var integer <p>Export type.</p><p>Enumeration values:</p><ul><li>0: all configurations</li><li>1: only custom and modified configurations</li></ul>
     */
    public $ExportType;

    /**
     * @var string <p>Node IP address.</p>
     */
    public $Ip;

    /**
     * @var string <p>Configuration group name.</p>
     */
    public $ConfGroupName;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param array $ExportConfContexts <p>Configuration to be exported.</p>
     * @param integer $ExportType <p>Export type.</p><p>Enumeration values:</p><ul><li>0: all configurations</li><li>1: only custom and modified configurations</li></ul>
     * @param string $Ip <p>Node IP address.</p>
     * @param string $ConfGroupName <p>Configuration group name.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExportConfContexts",$param) and $param["ExportConfContexts"] !== null) {
            $this->ExportConfContexts = [];
            foreach ($param["ExportConfContexts"] as $key => $value){
                $obj = new ExportConfContext();
                $obj->deserialize($value);
                array_push($this->ExportConfContexts, $obj);
            }
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
