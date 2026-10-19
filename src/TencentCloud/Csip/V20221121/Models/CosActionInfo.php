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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos command information
 *
 * @method string getActionName() Obtain Api name
 * @method void setActionName(string $ActionName) Set Api name
 * @method string getActionNameCn() Obtain Interface Chinese name
 * @method void setActionNameCn(string $ActionNameCn) Set Interface Chinese name
 * @method string getActionDescription() Obtain This API is used to describe APIs.
 * @method void setActionDescription(string $ActionDescription) Set This API is used to describe APIs.
 */
class CosActionInfo extends AbstractModel
{
    /**
     * @var string Api name
     */
    public $ActionName;

    /**
     * @var string Interface Chinese name
     */
    public $ActionNameCn;

    /**
     * @var string This API is used to describe APIs.
     */
    public $ActionDescription;

    /**
     * @param string $ActionName Api name
     * @param string $ActionNameCn Interface Chinese name
     * @param string $ActionDescription This API is used to describe APIs.
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ActionNameCn",$param) and $param["ActionNameCn"] !== null) {
            $this->ActionNameCn = $param["ActionNameCn"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }
    }
}
