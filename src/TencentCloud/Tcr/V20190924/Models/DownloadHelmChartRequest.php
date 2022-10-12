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
 * DownloadHelmChart request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getChartName() Obtain Helm chart name
 * @method void setChartName(string $ChartName) Set Helm chart name
 * @method string getChartVersion() Obtain Helm chart version
 * @method void setChartVersion(string $ChartVersion) Set Helm chart version
 */
class DownloadHelmChartRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string Helm chart name
     */
    public $ChartName;

    /**
     * @var string Helm chart version
     */
    public $ChartVersion;

    /**
     * @param string $RegistryId Instance ID
     * @param string $NamespaceName Namespace name
     * @param string $ChartName Helm chart name
     * @param string $ChartVersion Helm chart version
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
