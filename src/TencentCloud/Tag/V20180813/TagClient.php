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

namespace TencentCloud\Tag\V20180813;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tag\V20180813\Models as Models;

/**
 * @method Models\AddProjectResponse AddProject(Models\AddProjectRequest $req) Creates a project
 * @method Models\AddResourceTagResponse AddResourceTag(Models\AddResourceTagRequest $req) This API is used to associate resources with tags.
 * @method Models\AttachResourcesTagResponse AttachResourcesTag(Models\AttachResourcesTagRequest $req) This API is used to associate a tag with multiple resources.
 * @method Models\CreateTagResponse CreateTag(Models\CreateTagRequest $req) This API is used to create a tag key and tag value pair.
 * @method Models\CreateTagsResponse CreateTags(Models\CreateTagsRequest $req) This API is used to create multiple tag key-value pairs.
 * @method Models\DeleteResourceTagResponse DeleteResourceTag(Models\DeleteResourceTagRequest $req) This API is used to unassociate tags and resources.
 * @method Models\DeleteTagResponse DeleteTag(Models\DeleteTagRequest $req) This API is used to delete a tag key and tag value pair.
 * @method Models\DeleteTagsResponse DeleteTags(Models\DeleteTagsRequest $req) This API is used to delete tag keys and tag values in batches.
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) This API is used to get project lists.
 * @method Models\DescribeResourceTagsResponse DescribeResourceTags(Models\DescribeResourceTagsRequest $req) This API is used to query the tags associated with a resource.
 * @method Models\DescribeResourceTagsByResourceIdsResponse DescribeResourceTagsByResourceIds(Models\DescribeResourceTagsByResourceIdsRequest $req) This API is used to query the tag key-value pairs associated with an existing resource.
 * @method Models\DescribeResourceTagsByResourceIdsSeqResponse DescribeResourceTagsByResourceIdsSeq(Models\DescribeResourceTagsByResourceIdsSeqRequest $req) This API is used to view the tags associated with a resource in sequence.
 * @method Models\DescribeResourceTagsByTagKeysResponse DescribeResourceTagsByTagKeys(Models\DescribeResourceTagsByTagKeysRequest $req) This API is used to get resource tags based on tag keys.
 * @method Models\DescribeResourcesByTagsResponse DescribeResourcesByTags(Models\DescribeResourcesByTagsRequest $req) This API is used to query resources by tags.
 * @method Models\DescribeResourcesByTagsUnionResponse DescribeResourcesByTagsUnion(Models\DescribeResourcesByTagsUnionRequest $req) This API is used to query resource list by tags.
 * @method Models\DescribeTagKeysResponse DescribeTagKeys(Models\DescribeTagKeysRequest $req) This API is used to query tag keys in the list of created tags.
 * @method Models\DescribeTagValuesResponse DescribeTagValues(Models\DescribeTagValuesRequest $req) This API is used to query tag values in an existing tag list.
 * @method Models\DescribeTagValuesSeqResponse DescribeTagValuesSeq(Models\DescribeTagValuesSeqRequest $req) This API is used to query tag values in a created tag list.
 * @method Models\DescribeTagsResponse DescribeTags(Models\DescribeTagsRequest $req) This API is used to query the list of created tags.
 * @method Models\DescribeTagsSeqResponse DescribeTagsSeq(Models\DescribeTagsSeqRequest $req) This API is used to query the created tag lists.

 * @method Models\DetachResourcesTagResponse DetachResourcesTag(Models\DetachResourcesTagRequest $req) This API is used to unbind a tag from multiple resources.
 * @method Models\GetResourcesResponse GetResources(Models\GetResourcesRequest $req) This API is used to query the list of resources associated with a tag.
 * @method Models\GetTagKeysResponse GetTagKeys(Models\GetTagKeysRequest $req) This API is used to query the list of tag keys.
 * @method Models\GetTagValuesResponse GetTagValues(Models\GetTagValuesRequest $req) This API is used to query tag values in the list of created tags.
 * @method Models\GetTagsResponse GetTags(Models\GetTagsRequest $req) This API is used to get the list of created tags.
 * @method Models\ModifyResourceTagsResponse ModifyResourceTags(Models\ModifyResourceTagsRequest $req) This API is used to modify all tags associated with a resource.
 * @method Models\ModifyResourcesTagValueResponse ModifyResourcesTagValue(Models\ModifyResourcesTagValueRequest $req) This API is used to modify the tag value corresponding to a tag key associated with multiple resources.
 * @method Models\TagResourcesResponse TagResources(Models\TagResourcesRequest $req) This API is used to create and bind a tag uniformly to multiple specified resources of multiple Tencent Cloud services.
 * @method Models\UnTagResourcesResponse UnTagResources(Models\UnTagResourcesRequest $req) This API is used to unbind a tag uniformly from multiple specified resources of multiple Tencent Cloud services.
 * @method Models\UpdateResourceTagValueResponse UpdateResourceTagValue(Models\UpdateResourceTagValueRequest $req) This API is used to modify the values of tags associated with a resource (the tag key does not change).
 */

class TagClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tag.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tag";

    /**
     * @var string
     */
    protected $version = "2018-08-13";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tag")."\\"."V20180813\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
