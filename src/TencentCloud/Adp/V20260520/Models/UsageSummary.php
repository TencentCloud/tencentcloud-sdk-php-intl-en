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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated details of resource usage
 *
 * @method ModelUsageSummary getModel() Obtain <p>Exclusive to MODEL domain</p>
 * @method void setModel(ModelUsageSummary $Model) Set <p>Exclusive to MODEL domain</p>
 * @method PlatformUsageSummary getPlatform() Obtain <p>PLATFORM domain exclusive</p>
 * @method void setPlatform(PlatformUsageSummary $Platform) Set <p>PLATFORM domain exclusive</p>
 * @method PluginUsageSummary getPlugin() Obtain <p>Exclusive to PLUGIN domain</p>
 * @method void setPlugin(PluginUsageSummary $Plugin) Set <p>Exclusive to PLUGIN domain</p>
 * @method string getSourceId() Obtain <p>Source ID; CORP view=space_id (corporate view grouped by space), SPACE view=app_id (uint64 string), APP view=app_id</p>
 * @method void setSourceId(string $SourceId) Set <p>Source ID; CORP view=space_id (corporate view grouped by space), SPACE view=app_id (uint64 string), APP view=app_id</p>
 * @method string getSourceName() Obtain <p>Source name; CORP view=space_name, SPACE view=app_name, APP view=app_name</p>
 * @method void setSourceName(string $SourceName) Set <p>Source name; CORP view=space_name, SPACE view=app_name, APP view=app_name</p>
 * @method integer getViewType() Obtain <p>View type, determines the business meaning of SourceId/SourceName</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></tbody></table>
 * @method void setViewType(integer $ViewType) Set <p>View type, determines the business meaning of SourceId/SourceName</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></tbody></table>
 */
class UsageSummary extends AbstractModel
{
    /**
     * @var ModelUsageSummary <p>Exclusive to MODEL domain</p>
     */
    public $Model;

    /**
     * @var PlatformUsageSummary <p>PLATFORM domain exclusive</p>
     */
    public $Platform;

    /**
     * @var PluginUsageSummary <p>Exclusive to PLUGIN domain</p>
     */
    public $Plugin;

    /**
     * @var string <p>Source ID; CORP view=space_id (corporate view grouped by space), SPACE view=app_id (uint64 string), APP view=app_id</p>
     */
    public $SourceId;

    /**
     * @var string <p>Source name; CORP view=space_name, SPACE view=app_name, APP view=app_name</p>
     */
    public $SourceName;

    /**
     * @var integer <p>View type, determines the business meaning of SourceId/SourceName</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></tbody></table>
     */
    public $ViewType;

    /**
     * @param ModelUsageSummary $Model <p>Exclusive to MODEL domain</p>
     * @param PlatformUsageSummary $Platform <p>PLATFORM domain exclusive</p>
     * @param PluginUsageSummary $Plugin <p>Exclusive to PLUGIN domain</p>
     * @param string $SourceId <p>Source ID; CORP view=space_id (corporate view grouped by space), SPACE view=app_id (uint64 string), APP view=app_id</p>
     * @param string $SourceName <p>Source name; CORP view=space_name, SPACE view=app_name, APP view=app_name</p>
     * @param integer $ViewType <p>View type, determines the business meaning of SourceId/SourceName</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>VIEW_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not pass in requests)</td></tr><tr><td>VIEW_TYPE_CORP</td><td>1</td><td>Corporate view</td></tr><tr><td>VIEW_TYPE_SPACE</td><td>2</td><td>Space view</td></tr><tr><td>VIEW_TYPE_APP</td><td>3</td><td>Application view</td></tr></tbody></table>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelUsageSummary();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = new PlatformUsageSummary();
            $this->Platform->deserialize($param["Platform"]);
        }

        if (array_key_exists("Plugin",$param) and $param["Plugin"] !== null) {
            $this->Plugin = new PluginUsageSummary();
            $this->Plugin->deserialize($param["Plugin"]);
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }
    }
}
