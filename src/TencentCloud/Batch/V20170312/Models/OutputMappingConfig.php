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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output mapping configuration
 *
 * @method string getScene() Obtain Storage type. Only `COS` is supported.
 * @method void setScene(string $Scene) Set Storage type. Only `COS` is supported.
 * @method integer getWorkerNum() Obtain Number of concurrent workers
 * @method void setWorkerNum(integer $WorkerNum) Set Number of concurrent workers
 * @method integer getWorkerPartSize() Obtain Size of a worker part, in MB.
 * @method void setWorkerPartSize(integer $WorkerPartSize) Set Size of a worker part, in MB.
 */
class OutputMappingConfig extends AbstractModel
{
    /**
     * @var string Storage type. Only `COS` is supported.
     */
    public $Scene;

    /**
     * @var integer Number of concurrent workers
     */
    public $WorkerNum;

    /**
     * @var integer Size of a worker part, in MB.
     */
    public $WorkerPartSize;

    /**
     * @param string $Scene Storage type. Only `COS` is supported.
     * @param integer $WorkerNum Number of concurrent workers
     * @param integer $WorkerPartSize Size of a worker part, in MB.
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("WorkerNum",$param) and $param["WorkerNum"] !== null) {
            $this->WorkerNum = $param["WorkerNum"];
        }

        if (array_key_exists("WorkerPartSize",$param) and $param["WorkerPartSize"] !== null) {
            $this->WorkerPartSize = $param["WorkerPartSize"];
        }
    }
}
