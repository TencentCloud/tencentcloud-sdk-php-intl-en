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
 * Operation result of the data source.
 *
 * @method boolean getStatus() Obtain Whether the operation is successful
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(boolean $Status) Set Whether the operation is successful
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataSourceId() Obtain Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataSourceId(integer $DataSourceId) Set Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataSourceResult extends AbstractModel
{
    /**
     * @var boolean Whether the operation is successful
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataSourceId;

    /**
     * @param boolean $Status Whether the operation is successful
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataSourceId Data source ID.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }
    }
}
