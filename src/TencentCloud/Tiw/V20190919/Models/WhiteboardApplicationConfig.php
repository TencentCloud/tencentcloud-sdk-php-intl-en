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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whiteboard application configuration, including the resource bucket, domain name, callback URL, and callback key.
 *
 * @method string getTaskType() Obtain Task type.

recording: Real-time recording.
transcode: Document transcoding.
 * @method void setTaskType(string $TaskType) Set Task type.

recording: Real-time recording.
transcode: Document transcoding.
 * @method string getBucketName() Obtain Bucket name.
 * @method void setBucketName(string $BucketName) Set Bucket name.
 * @method string getBucketLocation() Obtain Region of the bucket.
 * @method void setBucketLocation(string $BucketLocation) Set Region of the bucket.
 * @method string getBucketPrefix() Obtain Resource prefix of the bucket.
 * @method void setBucketPrefix(string $BucketPrefix) Set Resource prefix of the bucket.
 * @method string getResultDomain() Obtain Destination CDN domain name.
 * @method void setResultDomain(string $ResultDomain) Set Destination CDN domain name.
 * @method string getCallback() Obtain Callback URL.
 * @method void setCallback(string $Callback) Set Callback URL.
 * @method string getCallbackKey() Obtain Callback authentication key.
 * @method void setCallbackKey(string $CallbackKey) Set Callback authentication key.
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getAdminUserId() Obtain IM admin user ID.
 * @method void setAdminUserId(string $AdminUserId) Set IM admin user ID.
 * @method string getAdminUserSig() Obtain IM admin user signature.
 * @method void setAdminUserSig(string $AdminUserSig) Set IM admin user signature.
 */
class WhiteboardApplicationConfig extends AbstractModel
{
    /**
     * @var string Task type.

recording: Real-time recording.
transcode: Document transcoding.
     */
    public $TaskType;

    /**
     * @var string Bucket name.
     */
    public $BucketName;

    /**
     * @var string Region of the bucket.
     */
    public $BucketLocation;

    /**
     * @var string Resource prefix of the bucket.
     */
    public $BucketPrefix;

    /**
     * @var string Destination CDN domain name.
     */
    public $ResultDomain;

    /**
     * @var string Callback URL.
     */
    public $Callback;

    /**
     * @var string Callback authentication key.
     */
    public $CallbackKey;

    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string IM admin user ID.
     */
    public $AdminUserId;

    /**
     * @var string IM admin user signature.
     */
    public $AdminUserSig;

    /**
     * @param string $TaskType Task type.

recording: Real-time recording.
transcode: Document transcoding.
     * @param string $BucketName Bucket name.
     * @param string $BucketLocation Region of the bucket.
     * @param string $BucketPrefix Resource prefix of the bucket.
     * @param string $ResultDomain Destination CDN domain name.
     * @param string $Callback Callback URL.
     * @param string $CallbackKey Callback authentication key.
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $AdminUserId IM admin user ID.
     * @param string $AdminUserSig IM admin user signature.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketLocation",$param) and $param["BucketLocation"] !== null) {
            $this->BucketLocation = $param["BucketLocation"];
        }

        if (array_key_exists("BucketPrefix",$param) and $param["BucketPrefix"] !== null) {
            $this->BucketPrefix = $param["BucketPrefix"];
        }

        if (array_key_exists("ResultDomain",$param) and $param["ResultDomain"] !== null) {
            $this->ResultDomain = $param["ResultDomain"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("AdminUserSig",$param) and $param["AdminUserSig"] !== null) {
            $this->AdminUserSig = $param["AdminUserSig"];
        }
    }
}
