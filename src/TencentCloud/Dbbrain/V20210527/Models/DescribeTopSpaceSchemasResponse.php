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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopSpaceSchemas response structure.
 *
 * @method array getTopSpaceSchemas() Obtain List of the returned space statistics of top databases.
 * @method void setTopSpaceSchemas(array $TopSpaceSchemas) Set List of the returned space statistics of top databases.
 * @method integer getTimestamp() Obtain Timestamp (in seconds) of database space data collection points
 * @method void setTimestamp(integer $Timestamp) Set Timestamp (in seconds) of database space data collection points
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTopSpaceSchemasResponse extends AbstractModel
{
    /**
     * @var array List of the returned space statistics of top databases.
     */
    public $TopSpaceSchemas;

    /**
     * @var integer Timestamp (in seconds) of database space data collection points
     */
    public $Timestamp;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TopSpaceSchemas List of the returned space statistics of top databases.
     * @param integer $Timestamp Timestamp (in seconds) of database space data collection points
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TopSpaceSchemas",$param) and $param["TopSpaceSchemas"] !== null) {
            $this->TopSpaceSchemas = [];
            foreach ($param["TopSpaceSchemas"] as $key => $value){
                $obj = new SchemaSpaceData();
                $obj->deserialize($value);
                array_push($this->TopSpaceSchemas, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
