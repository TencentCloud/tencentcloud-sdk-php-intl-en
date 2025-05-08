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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public network access information.
 *
 * @method string getPublicAccessEndpoint() Obtain Public network domain.
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) Set Public network domain.
 * @method string getPublicDataStreamStatus() Obtain Public network status.
 * @method void setPublicDataStreamStatus(string $PublicDataStreamStatus) Set Public network status.
 */
class RabbitMQServerlessAccessInfo extends AbstractModel
{
    /**
     * @var string Public network domain.
     */
    public $PublicAccessEndpoint;

    /**
     * @var string Public network status.
     */
    public $PublicDataStreamStatus;

    /**
     * @param string $PublicAccessEndpoint Public network domain.
     * @param string $PublicDataStreamStatus Public network status.
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
        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("PublicDataStreamStatus",$param) and $param["PublicDataStreamStatus"] !== null) {
            $this->PublicDataStreamStatus = $param["PublicDataStreamStatus"];
        }
    }
}
