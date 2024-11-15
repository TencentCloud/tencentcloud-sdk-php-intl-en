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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogConfigs request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterType() Obtain Currently supported cluster types are tke and eks. The default is tke.
 * @method void setClusterType(string $ClusterType) Set Currently supported cluster types are tke and eks. The default is tke.
 * @method string getLogConfigNames() Obtain Search by collection rule name. For multiple collection rules, they are separated by ",".
 * @method void setLogConfigNames(string $LogConfigNames) Set Search by collection rule name. For multiple collection rules, they are separated by ",".
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 20; maximum value: 100.
 */
class DescribeLogConfigsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Currently supported cluster types are tke and eks. The default is tke.
     */
    public $ClusterType;

    /**
     * @var string Search by collection rule name. For multiple collection rules, they are separated by ",".
     */
    public $LogConfigNames;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of output entries. Default value: 20; maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterType Currently supported cluster types are tke and eks. The default is tke.
     * @param string $LogConfigNames Search by collection rule name. For multiple collection rules, they are separated by ",".
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Maximum number of output entries. Default value: 20; maximum value: 100.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("LogConfigNames",$param) and $param["LogConfigNames"] !== null) {
            $this->LogConfigNames = $param["LogConfigNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
