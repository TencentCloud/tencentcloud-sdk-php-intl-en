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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DAG information.
 *
 * @method string getID() Obtain Query ID.
 * @method void setID(string $ID) Set Query ID.
 * @method string getType() Obtain DAG type. Only StarRocks is supported currently.
 * @method void setType(string $Type) Set DAG type. Only StarRocks is supported currently.
 * @method string getContent() Obtain Returned JSON string of the DAG.
 * @method void setContent(string $Content) Set Returned JSON string of the DAG.
 */
class DAGInfo extends AbstractModel
{
    /**
     * @var string Query ID.
     */
    public $ID;

    /**
     * @var string DAG type. Only StarRocks is supported currently.
     */
    public $Type;

    /**
     * @var string Returned JSON string of the DAG.
     */
    public $Content;

    /**
     * @param string $ID Query ID.
     * @param string $Type DAG type. Only StarRocks is supported currently.
     * @param string $Content Returned JSON string of the DAG.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
