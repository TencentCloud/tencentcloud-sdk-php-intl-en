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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBinlogConfig request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method BinlogConfigInfo getBinlogConfig() Obtain Specifies the Binlog configuration message.
 * @method void setBinlogConfig(BinlogConfigInfo $BinlogConfig) Set Specifies the Binlog configuration message.
 */
class ModifyBinlogConfigRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var BinlogConfigInfo Specifies the Binlog configuration message.
     */
    public $BinlogConfig;

    /**
     * @param string $ClusterId Cluster ID
     * @param BinlogConfigInfo $BinlogConfig Specifies the Binlog configuration message.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BinlogConfig",$param) and $param["BinlogConfig"] !== null) {
            $this->BinlogConfig = new BinlogConfigInfo();
            $this->BinlogConfig->deserialize($param["BinlogConfig"]);
        }
    }
}
