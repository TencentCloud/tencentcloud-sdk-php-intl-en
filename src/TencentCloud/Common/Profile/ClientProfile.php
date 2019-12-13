<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common\Profile;

/**
 * Class ClientProfile
 * @package TencentCloud\Common\Profile
 */
class ClientProfile
{
    /**
     * @var string
     */
    public static $SIGN_HMAC_SHA1 = "HmacSHA1";

    /**
     * @var string
     */
    public static $SIGN_HMAC_SHA256 = "HmacSHA256";

    /**
     * @var string
     */
    public static $SIGN_TC3_SHA256 = "TC3-HMAC-SHA256";

    /**
     * @var HttpProfile
     */
    private $httpProfile;

    /**
     * @var string
     */
    private $signMethod;

    /**
     * @var string
     */
    private $unsignedPayload;


    /**
     * ClientProfile constructor.
     * @param string $signMethod
     * @param HttpProfile $httpProfile
     */
    public function __construct($signMethod = null, $httpProfile = null)
    {
        $this->signMethod = $signMethod ? $signMethod : ClientProfile::$SIGN_TC3_SHA256;
        $this->httpProfile = $httpProfile ? $httpProfile : new HttpProfile();
        $this->unsignedPayload = false;
    }

    /**
     * Set signature method.
     * @param string $signMethod
     */
    public function setSignMethod($signMethod)
    {
        $this->signMethod = $signMethod;
    }

    /**
     * @param HttpProfile $httpProfile
     */
    public function setHttpProfile($httpProfile)
    {
        $this->httpProfile = $httpProfile;
    }

    /**
     * Get signature method.
     * @return null|string
     */
    public function getSignMethod()
    {
        return $this->signMethod;
    }

    /**
     * Set signature process without request payload.
     * @param bool $flag true means ignore request payload.
     */
    public function setUnsignedPayload($flag)
    {
        $this->unsignedPayload = $flag;
    }

    /**
     * Get flag of request payload is signed or not.
     * @return bool
     */
    public function getUnsignedPayload()
    {
        return $this->unsignedPayload;
    }

    /**
     * Get http profile settings
     * @return null|HttpProfile http
     */
    public function getHttpProfile()
    {
        return $this->httpProfile;
    }
}
