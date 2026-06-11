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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCosRecharge request structure.
 *
 * @method string getId() Obtain COS import configuration Id.
-Get the cos import configuration Id by [searching for the cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1).
 * @method void setId(string $Id) Set COS import configuration Id.
-Get the cos import configuration Id by [searching for the cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1).
 * @method string getTopicId() Obtain Log topic Id.
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic Id.
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1).
 */
class DeleteCosRechargeRequest extends AbstractModel
{
    /**
     * @var string COS import configuration Id.
-Get the cos import configuration Id by [searching for the cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1).
     */
    public $Id;

    /**
     * @var string Log topic Id.
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @param string $Id COS import configuration Id.
-Get the cos import configuration Id by [searching for the cos import configuration](https://www.tencentcloud.com/document/product/614/88099?from_cn_redirect=1).
     * @param string $TopicId Log topic Id.
- Get the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/api/614/56454?from_cn_redirect=1).
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
