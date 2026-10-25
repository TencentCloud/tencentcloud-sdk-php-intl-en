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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Destination information of the AWS S3 bucket. EdgeOne is authorized to deliver real-time logs to your AWS S3 bucket through an IAM role and an external ID, with no need to provide a long-term access key. For details, see [Delivering Logs to AWS S3](https://www.tencentcloud.com/document/product/1145/56251).
 *
 * @method string getEndpoint() Obtain Service endpoint domain name of the AWS S3 bucket. For valid values, see [AWS Endpoints](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints). Example: `s3.us-west-2.amazonaws.com`.
 * @method void setEndpoint(string $Endpoint) Set Service endpoint domain name of the AWS S3 bucket. For valid values, see [AWS Endpoints](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints). Example: `s3.us-west-2.amazonaws.com`.
 * @method string getBucketName() Obtain <p>Name of the AWS S3 bucket. You can view the bucket name in the Buckets list in the AWS S3 console.</p><p>It must be 3 to 63 characters in length, contain only lowercase letters, digits, periods (.), and hyphens (-), and start and end with a letter or a digit.</p>
 * @method void setBucketName(string $BucketName) Set <p>Name of the AWS S3 bucket. You can view the bucket name in the Buckets list in the AWS S3 console.</p><p>It must be 3 to 63 characters in length, contain only lowercase letters, digits, periods (.), and hyphens (-), and start and end with a letter or a digit.</p>
 * @method string getPath() Obtain <p>Directory path where log files are stored in the AWS S3 bucket. Multiple directory levels can be created by separating with `/`. It cannot contain relative path segments such as `./..`, and the total path length cannot exceed 1024 bytes.</p><p>If the directory path exists, it is used directly; if it does not exist, it is automatically created.</p><p>Directory names can only consist of letters, digits, and `!-_.*'()`.</p><p>Example: `eo-logs/l7-access-logs`.</p>
 * @method void setPath(string $Path) Set <p>Directory path where log files are stored in the AWS S3 bucket. Multiple directory levels can be created by separating with `/`. It cannot contain relative path segments such as `./..`, and the total path length cannot exceed 1024 bytes.</p><p>If the directory path exists, it is used directly; if it does not exist, it is automatically created.</p><p>Directory names can only consist of letters, digits, and `!-_.*'()`.</p><p>Example: `eo-logs/l7-access-logs`.</p>
 * @method string getRoleARN() Obtain <p>ARN of the IAM role that authorizes EdgeOne to access the AWS S3 bucket.</p><p>You need to first create an IAM role in your AWS account that grants EdgeOne write permissions (for how to create it, see <a href="https://www.tencentcloud.com/document/product/1145/56251">Delivering Logs to AWS S3</a>). After creation, you can view and copy the ARN at the top of the role details page in the AWS IAM console.</p><p>Example: `arn:aws:iam::123456789012:role/eo-logs`.</p>
 * @method void setRoleARN(string $RoleARN) Set <p>ARN of the IAM role that authorizes EdgeOne to access the AWS S3 bucket.</p><p>You need to first create an IAM role in your AWS account that grants EdgeOne write permissions (for how to create it, see <a href="https://www.tencentcloud.com/document/product/1145/56251">Delivering Logs to AWS S3</a>). After creation, you can view and copy the ARN at the top of the role details page in the AWS IAM console.</p><p>Example: `arn:aws:iam::123456789012:role/eo-logs`.</p>
 * @method string getCompressType() Obtain <p>Data compression type. Valid values:</p><ul><li>`gzip`: gzip compression.</li></ul>If left empty, compression is disabled.
 * @method void setCompressType(string $CompressType) Set <p>Data compression type. Valid values:</p><ul><li>`gzip`: gzip compression.</li></ul>If left empty, compression is disabled.
 */
class AWSS3 extends AbstractModel
{
    /**
     * @var string Service endpoint domain name of the AWS S3 bucket. For valid values, see [AWS Endpoints](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints). Example: `s3.us-west-2.amazonaws.com`.
     */
    public $Endpoint;

    /**
     * @var string <p>Name of the AWS S3 bucket. You can view the bucket name in the Buckets list in the AWS S3 console.</p><p>It must be 3 to 63 characters in length, contain only lowercase letters, digits, periods (.), and hyphens (-), and start and end with a letter or a digit.</p>
     */
    public $BucketName;

    /**
     * @var string <p>Directory path where log files are stored in the AWS S3 bucket. Multiple directory levels can be created by separating with `/`. It cannot contain relative path segments such as `./..`, and the total path length cannot exceed 1024 bytes.</p><p>If the directory path exists, it is used directly; if it does not exist, it is automatically created.</p><p>Directory names can only consist of letters, digits, and `!-_.*'()`.</p><p>Example: `eo-logs/l7-access-logs`.</p>
     */
    public $Path;

    /**
     * @var string <p>ARN of the IAM role that authorizes EdgeOne to access the AWS S3 bucket.</p><p>You need to first create an IAM role in your AWS account that grants EdgeOne write permissions (for how to create it, see <a href="https://www.tencentcloud.com/document/product/1145/56251">Delivering Logs to AWS S3</a>). After creation, you can view and copy the ARN at the top of the role details page in the AWS IAM console.</p><p>Example: `arn:aws:iam::123456789012:role/eo-logs`.</p>
     */
    public $RoleARN;

    /**
     * @var string <p>Data compression type. Valid values:</p><ul><li>`gzip`: gzip compression.</li></ul>If left empty, compression is disabled.
     */
    public $CompressType;

    /**
     * @param string $Endpoint Service endpoint domain name of the AWS S3 bucket. For valid values, see [AWS Endpoints](https://docs.aws.amazon.com/general/latest/gr/rande.html#regional-endpoints). Example: `s3.us-west-2.amazonaws.com`.
     * @param string $BucketName <p>Name of the AWS S3 bucket. You can view the bucket name in the Buckets list in the AWS S3 console.</p><p>It must be 3 to 63 characters in length, contain only lowercase letters, digits, periods (.), and hyphens (-), and start and end with a letter or a digit.</p>
     * @param string $Path <p>Directory path where log files are stored in the AWS S3 bucket. Multiple directory levels can be created by separating with `/`. It cannot contain relative path segments such as `./..`, and the total path length cannot exceed 1024 bytes.</p><p>If the directory path exists, it is used directly; if it does not exist, it is automatically created.</p><p>Directory names can only consist of letters, digits, and `!-_.*'()`.</p><p>Example: `eo-logs/l7-access-logs`.</p>
     * @param string $RoleARN <p>ARN of the IAM role that authorizes EdgeOne to access the AWS S3 bucket.</p><p>You need to first create an IAM role in your AWS account that grants EdgeOne write permissions (for how to create it, see <a href="https://www.tencentcloud.com/document/product/1145/56251">Delivering Logs to AWS S3</a>). After creation, you can view and copy the ARN at the top of the role details page in the AWS IAM console.</p><p>Example: `arn:aws:iam::123456789012:role/eo-logs`.</p>
     * @param string $CompressType <p>Data compression type. Valid values:</p><ul><li>`gzip`: gzip compression.</li></ul>If left empty, compression is disabled.
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RoleARN",$param) and $param["RoleARN"] !== null) {
            $this->RoleARN = $param["RoleARN"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
