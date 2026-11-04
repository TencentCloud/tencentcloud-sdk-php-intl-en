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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sharing link information (returned by details query; the non-modifiable part for users; the modifiable part of access_control is handled by ModifyApp)
 *
 * @method AppShareAccessControl getAccessControl() Obtain Currently effective access control configuration
 * @method void setAccessControl(AppShareAccessControl $AccessControl) Set Currently effective access control configuration
 * @method string getShareUrl() Obtain Share URL
 * @method void setShareUrl(string $ShareUrl) Set Share URL
 */
class AppShareURLInfo extends AbstractModel
{
    /**
     * @var AppShareAccessControl Currently effective access control configuration
     */
    public $AccessControl;

    /**
     * @var string Share URL
     */
    public $ShareUrl;

    /**
     * @param AppShareAccessControl $AccessControl Currently effective access control configuration
     * @param string $ShareUrl Share URL
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
        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AppShareAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("ShareUrl",$param) and $param["ShareUrl"] !== null) {
            $this->ShareUrl = $param["ShareUrl"];
        }
    }
}
