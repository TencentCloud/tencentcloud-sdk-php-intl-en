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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RTP configuration information of the created input.
 *
 * @method string getFEC() Obtain Default value: none. Valid values: ['none'].
 * @method void setFEC(string $FEC) Set Default value: none. Valid values: ['none'].
 * @method integer getIdleTimeout() Obtain Idle timeout period in ms. Default value: 5000. Value range: [1000, 10000].
 * @method void setIdleTimeout(integer $IdleTimeout) Set Idle timeout period in ms. Default value: 5000. Value range: [1000, 10000].
 */
class CreateInputRTPSettings extends AbstractModel
{
    /**
     * @var string Default value: none. Valid values: ['none'].
     */
    public $FEC;

    /**
     * @var integer Idle timeout period in ms. Default value: 5000. Value range: [1000, 10000].
     */
    public $IdleTimeout;

    /**
     * @param string $FEC Default value: none. Valid values: ['none'].
     * @param integer $IdleTimeout Idle timeout period in ms. Default value: 5000. Value range: [1000, 10000].
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
        if (array_key_exists("FEC",$param) and $param["FEC"] !== null) {
            $this->FEC = $param["FEC"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }
    }
}
