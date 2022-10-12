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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChartDownloadInfo request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Namespace
 * @method void setNamespaceName(string $NamespaceName) Set Namespace
 * @method string getChartName() Obtain Chart name
 * @method void setChartName(string $ChartName) Set Chart name
 * @method string getChartVersion() Obtain Chart version
 * @method void setChartVersion(string $ChartVersion) Set Chart version
 */
class DescribeChartDownloadInfoRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace
     */
    public $NamespaceName;

    /**
     * @var string Chart name
     */
    public $ChartName;

    /**
     * @var string Chart version
     */
    public $ChartVersion;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Namespace
     * @param string $ChartName Chart name
     * @param string $ChartVersion Chart version
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            $this->ChartName = $param["ChartName"];
        }

        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            $this->ChartVersion = $param["ChartVersion"];
        }
    }
}
