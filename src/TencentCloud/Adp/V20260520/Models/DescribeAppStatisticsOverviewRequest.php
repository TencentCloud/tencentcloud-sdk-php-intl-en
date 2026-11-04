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
 * DescribeAppStatisticsOverview request structure.
 *
 * @method integer getAppType() Obtain <p>Application type. Available values: APP_TYPE_RAG (RAG), APP_TYPE_WORKFLOW (Workflow), APP_TYPE_CLAW (Claw), APP_TYPE_MULTIAGENT (MultiAgent). In the current period, only APP_TYPE_RAG takes effect. The rest are reserved values. Importing them will return InvalidParameter.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not import in requests)</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG (uniquely supported in the current period)</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent (reserved, not currently supported)</td></tr></tbody></table>
 * @method void setAppType(integer $AppType) Set <p>Application type. Available values: APP_TYPE_RAG (RAG), APP_TYPE_WORKFLOW (Workflow), APP_TYPE_CLAW (Claw), APP_TYPE_MULTIAGENT (MultiAgent). In the current period, only APP_TYPE_RAG takes effect. The rest are reserved values. Importing them will return InvalidParameter.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not import in requests)</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG (uniquely supported in the current period)</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent (reserved, not currently supported)</td></tr></tbody></table>
 * @method TimeRange getTimeRange() Obtain <p>Query time range (Unix seconds)</p>
 * @method void setTimeRange(TimeRange $TimeRange) Set <p>Query time range (Unix seconds)</p>
 * @method ViewScope getViewScope() Obtain <p>View scope: application view (VIEW_TYPE_APP). For scope_id, enter the app ID (decimal string of the uint64 snowflake ID)</p>
 * @method void setViewScope(ViewScope $ViewScope) Set <p>View scope: application view (VIEW_TYPE_APP). For scope_id, enter the app ID (decimal string of the uint64 snowflake ID)</p>
 * @method string getSpaceId() Obtain <p>Space ID</p><p>Parameter format: <p>Space ID</p></p><p>Default value: default_space</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p><p>Parameter format: <p>Space ID</p></p><p>Default value: default_space</p>
 * @method string getAppId() Obtain <p>Application ID</p><p>Parameter format:</p><p>Application ID</p><p></p><p>Reference value: 2099767969573745984</p>
 * @method void setAppId(string $AppId) Set <p>Application ID</p><p>Parameter format:</p><p>Application ID</p><p></p><p>Reference value: 2099767969573745984</p>
 * @method array getFilterList() Obtain <p>Extended filtering. Filter combination rule: multiple items use AND, and value_list under the same item uses OR. Supported Name: space_id (Space ID), channel_type (calling method/channel type; for values, see the trpc.adp.common.v2.ChannelType Enumeration Name). If channel_type is not specified, aggregation is performed by all channels.</p>
 * @method void setFilterList(array $FilterList) Set <p>Extended filtering. Filter combination rule: multiple items use AND, and value_list under the same item uses OR. Supported Name: space_id (Space ID), channel_type (calling method/channel type; for values, see the trpc.adp.common.v2.ChannelType Enumeration Name). If channel_type is not specified, aggregation is performed by all channels.</p>
 */
class DescribeAppStatisticsOverviewRequest extends AbstractModel
{
    /**
     * @var integer <p>Application type. Available values: APP_TYPE_RAG (RAG), APP_TYPE_WORKFLOW (Workflow), APP_TYPE_CLAW (Claw), APP_TYPE_MULTIAGENT (MultiAgent). In the current period, only APP_TYPE_RAG takes effect. The rest are reserved values. Importing them will return InvalidParameter.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not import in requests)</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG (uniquely supported in the current period)</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent (reserved, not currently supported)</td></tr></tbody></table>
     */
    public $AppType;

    /**
     * @var TimeRange <p>Query time range (Unix seconds)</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>View scope: application view (VIEW_TYPE_APP). For scope_id, enter the app ID (decimal string of the uint64 snowflake ID)</p>
     */
    public $ViewScope;

    /**
     * @var string <p>Space ID</p><p>Parameter format: <p>Space ID</p></p><p>Default value: default_space</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Application ID</p><p>Parameter format:</p><p>Application ID</p><p></p><p>Reference value: 2099767969573745984</p>
     */
    public $AppId;

    /**
     * @var array <p>Extended filtering. Filter combination rule: multiple items use AND, and value_list under the same item uses OR. Supported Name: space_id (Space ID), channel_type (calling method/channel type; for values, see the trpc.adp.common.v2.ChannelType Enumeration Name). If channel_type is not specified, aggregation is performed by all channels.</p>
     */
    public $FilterList;

    /**
     * @param integer $AppType <p>Application type. Available values: APP_TYPE_RAG (RAG), APP_TYPE_WORKFLOW (Workflow), APP_TYPE_CLAW (Claw), APP_TYPE_MULTIAGENT (MultiAgent). In the current period, only APP_TYPE_RAG takes effect. The rest are reserved values. Importing them will return InvalidParameter.</p><table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified (invalid value, do not import in requests)</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG (uniquely supported in the current period)</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw (reserved, not currently supported)</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent (reserved, not currently supported)</td></tr></tbody></table>
     * @param TimeRange $TimeRange <p>Query time range (Unix seconds)</p>
     * @param ViewScope $ViewScope <p>View scope: application view (VIEW_TYPE_APP). For scope_id, enter the app ID (decimal string of the uint64 snowflake ID)</p>
     * @param string $SpaceId <p>Space ID</p><p>Parameter format: <p>Space ID</p></p><p>Default value: default_space</p>
     * @param string $AppId <p>Application ID</p><p>Parameter format:</p><p>Application ID</p><p></p><p>Reference value: 2099767969573745984</p>
     * @param array $FilterList <p>Extended filtering. Filter combination rule: multiple items use AND, and value_list under the same item uses OR. Supported Name: space_id (Space ID), channel_type (calling method/channel type; for values, see the trpc.adp.common.v2.ChannelType Enumeration Name). If channel_type is not specified, aggregation is performed by all channels.</p>
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = new TimeRange();
            $this->TimeRange->deserialize($param["TimeRange"]);
        }

        if (array_key_exists("ViewScope",$param) and $param["ViewScope"] !== null) {
            $this->ViewScope = new ViewScope();
            $this->ViewScope->deserialize($param["ViewScope"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
