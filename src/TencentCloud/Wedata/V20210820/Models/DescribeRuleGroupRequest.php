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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleGroup request structure.
 *
 * @method integer getRuleGroupId() Obtain Rule Group ID
 * @method void setRuleGroupId(integer $RuleGroupId) Set Rule Group ID
 * @method string getDatasourceId() Obtain Data Source ID
 * @method void setDatasourceId(string $DatasourceId) Set Data Source ID
 * @method string getTableId() Obtain Data Table ID
 * @method void setTableId(string $TableId) Set Data Table ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getDatabaseId() Obtain Database ID
 * @method void setDatabaseId(string $DatabaseId) Set Database ID
 */
class DescribeRuleGroupRequest extends AbstractModel
{
    /**
     * @var integer Rule Group ID
     */
    public $RuleGroupId;

    /**
     * @var string Data Source ID
     */
    public $DatasourceId;

    /**
     * @var string Data Table ID
     */
    public $TableId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Database ID
     */
    public $DatabaseId;

    /**
     * @param integer $RuleGroupId Rule Group ID
     * @param string $DatasourceId Data Source ID
     * @param string $TableId Data Table ID
     * @param string $ProjectId Project ID
     * @param string $DatabaseId Database ID
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
        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }
    }
}
