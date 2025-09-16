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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public cloud data source structure.
 *
 * @method string getDataSourceId() Obtain Data source ID.
 * @method void setDataSourceId(string $DataSourceId) Set Data source ID.
 * @method string getSubPath() Obtain Relative subpath to the data source.
 * @method void setSubPath(string $SubPath) Set Relative subpath to the data source.
 */
class PublicDataSourceFS extends AbstractModel
{
    /**
     * @var string Data source ID.
     */
    public $DataSourceId;

    /**
     * @var string Relative subpath to the data source.
     */
    public $SubPath;

    /**
     * @param string $DataSourceId Data source ID.
     * @param string $SubPath Relative subpath to the data source.
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }
    }
}
