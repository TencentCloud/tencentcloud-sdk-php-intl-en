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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration back-to-source conditions.
 *
 * @method integer getHttpStatusCode() Obtain HTTP code to trigger back-to-source conditions. If not filled, the default value is `404`.
 * @method void setHttpStatusCode(integer $HttpStatusCode) Set HTTP code to trigger back-to-source conditions. If not filled, the default value is `404`.
 * @method string getPrefix() Obtain Object key prefix to trigger back-to-source conditions
 * @method void setPrefix(string $Prefix) Set Object key prefix to trigger back-to-source conditions
 */
class IncrementalMigrationHttpOriginCondition extends AbstractModel
{
    /**
     * @var integer HTTP code to trigger back-to-source conditions. If not filled, the default value is `404`.
     */
    public $HttpStatusCode;

    /**
     * @var string Object key prefix to trigger back-to-source conditions
     */
    public $Prefix;

    /**
     * @param integer $HttpStatusCode HTTP code to trigger back-to-source conditions. If not filled, the default value is `404`.
     * @param string $Prefix Object key prefix to trigger back-to-source conditions
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
        if (array_key_exists("HttpStatusCode",$param) and $param["HttpStatusCode"] !== null) {
            $this->HttpStatusCode = $param["HttpStatusCode"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }
    }
}
