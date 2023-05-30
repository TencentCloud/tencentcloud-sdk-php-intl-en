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
 * ModifyWhiteboardBucketConfig request structure.
 *
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method string getTaskType() Obtain Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 * @method void setTaskType(string $TaskType) Set Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
 * @method string getBucketName() Obtain Name of the COS bucket.
 * @method void setBucketName(string $BucketName) Set Name of the COS bucket.
 * @method string getBucketLocation() Obtain Region of the COS bucket.
 * @method void setBucketLocation(string $BucketLocation) Set Region of the COS bucket.
 * @method string getBucketPrefix() Obtain Resource prefix of the bucket.
 * @method void setBucketPrefix(string $BucketPrefix) Set Resource prefix of the bucket.
 * @method string getResultDomain() Obtain Domain name of the URL of the bucket.
 * @method void setResultDomain(string $ResultDomain) Set Domain name of the URL of the bucket.
 */
class ModifyWhiteboardBucketConfigRequest extends AbstractModel
{
    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var string Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
     */
    public $TaskType;

    /**
     * @var string Name of the COS bucket.
     */
    public $BucketName;

    /**
     * @var string Region of the COS bucket.
     */
    public $BucketLocation;

    /**
     * @var string Resource prefix of the bucket.
     */
    public $BucketPrefix;

    /**
     * @var string Domain name of the URL of the bucket.
     */
    public $ResultDomain;

    /**
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param string $TaskType Task type to be queried.
recording: Real-time recording.
transcode: Document transcoding.
     * @param string $BucketName Name of the COS bucket.
     * @param string $BucketLocation Region of the COS bucket.
     * @param string $BucketPrefix Resource prefix of the bucket.
     * @param string $ResultDomain Domain name of the URL of the bucket.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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
    }
}
