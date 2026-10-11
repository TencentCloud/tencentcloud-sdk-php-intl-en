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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File operation configuration.
 *
 * @method string getParams() Obtain <p>Advanced running parameter, used for variable replacement, map-json String,String</p>
 * @method void setParams(string $Params) Set <p>Advanced running parameter, used for variable replacement, map-json String,String</p>
 * @method string getResourceId() Obtain <p>Execution resource ID. Source: ResourceId returned by the ListComputeResources API</p>
 * @method void setResourceId(string $ResourceId) Set <p>Execution resource ID. Source: ResourceId returned by the ListComputeResources API</p>
 * @method string getDefaultCatalog() Obtain <p>Default catalog</p>
 * @method void setDefaultCatalog(string $DefaultCatalog) Set <p>Default catalog</p>
 * @method string getDefaultSchema() Obtain <p>Default schema</p>
 * @method void setDefaultSchema(string $DefaultSchema) Set <p>Default schema</p>
 * @method string getAdvanceConfig() Obtain <p>Advanced configuration, JSON string</p>
 * @method void setAdvanceConfig(string $AdvanceConfig) Set <p>Advanced configuration, JSON string</p>
 * @method string getExtraParams() Obtain <p>Extended parameter, JSON string</p>
 * @method void setExtraParams(string $ExtraParams) Set <p>Extended parameter, JSON string</p>
 * @method string getWidgets() Obtain <p>Notebook interactive control definition, JSON string</p>
 * @method void setWidgets(string $Widgets) Set <p>Notebook interactive control definition, JSON string</p>
 * @method array getOutputConf() Obtain <p>Output configuration of each cell. Returned only in Get output parameters; input parameters are ignored.</p>
 * @method void setOutputConf(array $OutputConf) Set <p>Output configuration of each cell. Returned only in Get output parameters; input parameters are ignored.</p>
 * @method string getSqlSyntax() Obtain <p>SQL script grammar tag</p>
 * @method void setSqlSyntax(string $SqlSyntax) Set <p>SQL script grammar tag</p>
 * @method string getClusterId() Obtain <p>Platform cluster id</p>
 * @method void setClusterId(string $ClusterId) Set <p>Platform cluster id</p>
 * @method string getDefaultCatalogSource() Obtain <p>The source type of the default Catalog, used to identify which Catalog system the default Catalog belongs to. Selectable. Maximum length: 32. Values: METALAKE - TC Catalog (metadata lake Catalog); SETATS - Setats Catalog. If the value is empty or illegal, the backend falls back to METALAKE.</p>
 * @method void setDefaultCatalogSource(string $DefaultCatalogSource) Set <p>The source type of the default Catalog, used to identify which Catalog system the default Catalog belongs to. Selectable. Maximum length: 32. Values: METALAKE - TC Catalog (metadata lake Catalog); SETATS - Setats Catalog. If the value is empty or illegal, the backend falls back to METALAKE.</p>
 */
class FileConfig extends AbstractModel
{
    /**
     * @var string <p>Advanced running parameter, used for variable replacement, map-json String,String</p>
     */
    public $Params;

    /**
     * @var string <p>Execution resource ID. Source: ResourceId returned by the ListComputeResources API</p>
     */
    public $ResourceId;

    /**
     * @var string <p>Default catalog</p>
     */
    public $DefaultCatalog;

    /**
     * @var string <p>Default schema</p>
     */
    public $DefaultSchema;

    /**
     * @var string <p>Advanced configuration, JSON string</p>
     */
    public $AdvanceConfig;

    /**
     * @var string <p>Extended parameter, JSON string</p>
     */
    public $ExtraParams;

    /**
     * @var string <p>Notebook interactive control definition, JSON string</p>
     */
    public $Widgets;

    /**
     * @var array <p>Output configuration of each cell. Returned only in Get output parameters; input parameters are ignored.</p>
     */
    public $OutputConf;

    /**
     * @var string <p>SQL script grammar tag</p>
     */
    public $SqlSyntax;

    /**
     * @var string <p>Platform cluster id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>The source type of the default Catalog, used to identify which Catalog system the default Catalog belongs to. Selectable. Maximum length: 32. Values: METALAKE - TC Catalog (metadata lake Catalog); SETATS - Setats Catalog. If the value is empty or illegal, the backend falls back to METALAKE.</p>
     */
    public $DefaultCatalogSource;

    /**
     * @param string $Params <p>Advanced running parameter, used for variable replacement, map-json String,String</p>
     * @param string $ResourceId <p>Execution resource ID. Source: ResourceId returned by the ListComputeResources API</p>
     * @param string $DefaultCatalog <p>Default catalog</p>
     * @param string $DefaultSchema <p>Default schema</p>
     * @param string $AdvanceConfig <p>Advanced configuration, JSON string</p>
     * @param string $ExtraParams <p>Extended parameter, JSON string</p>
     * @param string $Widgets <p>Notebook interactive control definition, JSON string</p>
     * @param array $OutputConf <p>Output configuration of each cell. Returned only in Get output parameters; input parameters are ignored.</p>
     * @param string $SqlSyntax <p>SQL script grammar tag</p>
     * @param string $ClusterId <p>Platform cluster id</p>
     * @param string $DefaultCatalogSource <p>The source type of the default Catalog, used to identify which Catalog system the default Catalog belongs to. Selectable. Maximum length: 32. Values: METALAKE - TC Catalog (metadata lake Catalog); SETATS - Setats Catalog. If the value is empty or illegal, the backend falls back to METALAKE.</p>
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
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DefaultCatalog",$param) and $param["DefaultCatalog"] !== null) {
            $this->DefaultCatalog = $param["DefaultCatalog"];
        }

        if (array_key_exists("DefaultSchema",$param) and $param["DefaultSchema"] !== null) {
            $this->DefaultSchema = $param["DefaultSchema"];
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = $param["AdvanceConfig"];
        }

        if (array_key_exists("ExtraParams",$param) and $param["ExtraParams"] !== null) {
            $this->ExtraParams = $param["ExtraParams"];
        }

        if (array_key_exists("Widgets",$param) and $param["Widgets"] !== null) {
            $this->Widgets = $param["Widgets"];
        }

        if (array_key_exists("OutputConf",$param) and $param["OutputConf"] !== null) {
            $this->OutputConf = [];
            foreach ($param["OutputConf"] as $key => $value){
                $obj = new FileOutputConf();
                $obj->deserialize($value);
                array_push($this->OutputConf, $obj);
            }
        }

        if (array_key_exists("SqlSyntax",$param) and $param["SqlSyntax"] !== null) {
            $this->SqlSyntax = $param["SqlSyntax"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DefaultCatalogSource",$param) and $param["DefaultCatalogSource"] !== null) {
            $this->DefaultCatalogSource = $param["DefaultCatalogSource"];
        }
    }
}
