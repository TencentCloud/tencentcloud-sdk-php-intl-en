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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data exploration script configuration.
 *
 * @method string getDatasourceId() Obtain Data source Id.

 * @method void setDatasourceId(string $DatasourceId) Set Data source Id.

 * @method string getDatasourceEnv() Obtain Specifies the data source environment.

 * @method void setDatasourceEnv(string $DatasourceEnv) Set Specifies the data source environment.

 * @method string getComputeResource() Obtain Computational resource.

 * @method void setComputeResource(string $ComputeResource) Set Computational resource.

 * @method string getExecutorGroupId() Obtain Specifies the execution resource group.

 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Specifies the execution resource group.

 * @method string getParams() Obtain Advanced running parameter variable replacement map-json String,String.

 * @method void setParams(string $Params) Set Advanced running parameter variable replacement map-json String,String.

 * @method string getAdvanceConfig() Obtain Advanced setting. executes configuration parameters. map-json String,String. use Base64 encode.

 * @method void setAdvanceConfig(string $AdvanceConfig) Set Advanced setting. executes configuration parameters. map-json String,String. use Base64 encode.
 */
class SQLScriptConfig extends AbstractModel
{
    /**
     * @var string Data source Id.

     */
    public $DatasourceId;

    /**
     * @var string Specifies the data source environment.

     */
    public $DatasourceEnv;

    /**
     * @var string Computational resource.

     */
    public $ComputeResource;

    /**
     * @var string Specifies the execution resource group.

     */
    public $ExecutorGroupId;

    /**
     * @var string Advanced running parameter variable replacement map-json String,String.

     */
    public $Params;

    /**
     * @var string Advanced setting. executes configuration parameters. map-json String,String. use Base64 encode.

     */
    public $AdvanceConfig;

    /**
     * @param string $DatasourceId Data source Id.

     * @param string $DatasourceEnv Specifies the data source environment.

     * @param string $ComputeResource Computational resource.

     * @param string $ExecutorGroupId Specifies the execution resource group.

     * @param string $Params Advanced running parameter variable replacement map-json String,String.

     * @param string $AdvanceConfig Advanced setting. executes configuration parameters. map-json String,String. use Base64 encode.
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
        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatasourceEnv",$param) and $param["DatasourceEnv"] !== null) {
            $this->DatasourceEnv = $param["DatasourceEnv"];
        }

        if (array_key_exists("ComputeResource",$param) and $param["ComputeResource"] !== null) {
            $this->ComputeResource = $param["ComputeResource"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = $param["AdvanceConfig"];
        }
    }
}
