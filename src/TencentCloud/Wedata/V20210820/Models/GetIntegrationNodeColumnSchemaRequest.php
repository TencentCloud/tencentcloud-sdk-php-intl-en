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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetIntegrationNodeColumnSchema request structure.
 *
 * @method string getColumnContent() Obtain Field Example (JSON Format)
 * @method void setColumnContent(string $ColumnContent) Set Field Example (JSON Format)
 * @method string getDatasourceType() Obtain Data Source Type MYSQL|HIVE|KAFKA|ES|MONGODB|REST_API|SYBASE|TIDB|DORIS|DM|
 * @method void setDatasourceType(string $DatasourceType) Set Data Source Type MYSQL|HIVE|KAFKA|ES|MONGODB|REST_API|SYBASE|TIDB|DORIS|DM|
 */
class GetIntegrationNodeColumnSchemaRequest extends AbstractModel
{
    /**
     * @var string Field Example (JSON Format)
     */
    public $ColumnContent;

    /**
     * @var string Data Source Type MYSQL|HIVE|KAFKA|ES|MONGODB|REST_API|SYBASE|TIDB|DORIS|DM|
     */
    public $DatasourceType;

    /**
     * @param string $ColumnContent Field Example (JSON Format)
     * @param string $DatasourceType Data Source Type MYSQL|HIVE|KAFKA|ES|MONGODB|REST_API|SYBASE|TIDB|DORIS|DM|
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
        if (array_key_exists("ColumnContent",$param) and $param["ColumnContent"] !== null) {
            $this->ColumnContent = $param["ColumnContent"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
