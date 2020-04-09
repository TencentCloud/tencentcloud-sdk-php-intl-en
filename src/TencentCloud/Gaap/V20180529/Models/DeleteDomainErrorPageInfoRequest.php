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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDomainErrorPageInfo request structure.
 *
 * @method string getErrorPageId() Obtain Unique ID of a custom error page. For more information, please see the response to CreateDomainErrorPageInfo.
 * @method void setErrorPageId(string $ErrorPageId) Set Unique ID of a custom error page. For more information, please see the response to CreateDomainErrorPageInfo.
 */
class DeleteDomainErrorPageInfoRequest extends AbstractModel
{
    /**
     * @var string Unique ID of a custom error page. For more information, please see the response to CreateDomainErrorPageInfo.
     */
    public $ErrorPageId;

    /**
     * @param string $ErrorPageId Unique ID of a custom error page. For more information, please see the response to CreateDomainErrorPageInfo.
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
        if (array_key_exists("ErrorPageId",$param) and $param["ErrorPageId"] !== null) {
            $this->ErrorPageId = $param["ErrorPageId"];
        }
    }
}
