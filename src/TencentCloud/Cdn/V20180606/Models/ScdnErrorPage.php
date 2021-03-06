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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL error page
 *
 * @method integer getRedirectCode() Obtain Status code
 * @method void setRedirectCode(integer $RedirectCode) Set Status code
 * @method string getRedirectUrl() Obtain Redirection URL
 * @method void setRedirectUrl(string $RedirectUrl) Set Redirection URL
 */
class ScdnErrorPage extends AbstractModel
{
    /**
     * @var integer Status code
     */
    public $RedirectCode;

    /**
     * @var string Redirection URL
     */
    public $RedirectUrl;

    /**
     * @param integer $RedirectCode Status code
     * @param string $RedirectUrl Redirection URL
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
        if (array_key_exists("RedirectCode",$param) and $param["RedirectCode"] !== null) {
            $this->RedirectCode = $param["RedirectCode"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
