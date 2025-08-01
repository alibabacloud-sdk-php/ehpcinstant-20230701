<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreatePoolShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeleteJobsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeletePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DeletePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricDataShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\DescribeJobMetricLastShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetAppVersionsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetAppVersionsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListImagesShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsShrinkRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\RemoveImageRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\RemoveImageResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\TagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\TagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolRequest;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolResponse;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\UpdatePoolShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EhpcInstant extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpcinstant', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 添加托管侧用户自定义镜像
     *  *
     * @param AddImageRequest $tmpReq  AddImageRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->containerImageSpec)) {
            $request->containerImageSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->containerImageSpec, 'ContainerImageSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->VMImageSpec)) {
            $request->VMImageSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->VMImageSpec, 'VMImageSpec', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->containerImageSpecShrink)) {
            $query['ContainerImageSpec'] = $request->containerImageSpecShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->imageVersion)) {
            $query['ImageVersion'] = $request->imageVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->VMImageSpecShrink)) {
            $query['VMImageSpec'] = $request->VMImageSpecShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'AddImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加托管侧用户自定义镜像
     *  *
     * @param AddImageRequest $request AddImageRequest
     *
     * @return AddImageResponse AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @summary 提交任务
     *  *
     * @param CreateJobRequest $tmpReq  CreateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dependencyPolicy)) {
            $request->dependencyPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dependencyPolicy, 'DependencyPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->deploymentPolicy)) {
            $request->deploymentPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentPolicy, 'DeploymentPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityPolicy)) {
            $request->securityPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityPolicy, 'SecurityPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->tasks)) {
            $request->tasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dependencyPolicyShrink)) {
            $query['DependencyPolicy'] = $request->dependencyPolicyShrink;
        }
        if (!Utils::isUnset($request->deploymentPolicyShrink)) {
            $query['DeploymentPolicy'] = $request->deploymentPolicyShrink;
        }
        if (!Utils::isUnset($request->jobDescription)) {
            $query['JobDescription'] = $request->jobDescription;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->jobScheduler)) {
            $query['JobScheduler'] = $request->jobScheduler;
        }
        if (!Utils::isUnset($request->securityPolicyShrink)) {
            $query['SecurityPolicy'] = $request->securityPolicyShrink;
        }
        if (!Utils::isUnset($request->tasksShrink)) {
            $query['Tasks'] = $request->tasksShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交任务
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @summary 创建资源池
     *  *
     * @param CreatePoolRequest $tmpReq  CreatePoolRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePoolResponse CreatePoolResponse
     */
    public function createPoolWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePoolShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceLimits)) {
            $request->resourceLimitsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceLimits, 'ResourceLimits', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceLimitsShrink)) {
            $query['ResourceLimits'] = $request->resourceLimitsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建资源池
     *  *
     * @param CreatePoolRequest $request CreatePoolRequest
     *
     * @return CreatePoolResponse CreatePoolResponse
     */
    public function createPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPoolWithOptions($request, $runtime);
    }

    /**
     * @summary 删除作业
     *  *
     * @param DeleteJobsRequest $tmpReq  DeleteJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobsResponse DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->jobSpec)) {
            $request->jobSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobSpec, 'JobSpec', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $query['ExecutorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->jobScheduler)) {
            $query['JobScheduler'] = $request->jobScheduler;
        }
        if (!Utils::isUnset($request->jobSpecShrink)) {
            $query['JobSpec'] = $request->jobSpecShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJobs',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除作业
     *  *
     * @param DeleteJobsRequest $request DeleteJobsRequest
     *
     * @return DeleteJobsResponse DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除资源池
     *  *
     * @param DeletePoolRequest $request DeletePoolRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePoolResponse DeletePoolResponse
     */
    public function deletePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源池
     *  *
     * @param DeletePoolRequest $request DeletePoolRequest
     *
     * @return DeletePoolResponse DeletePoolResponse
     */
    public function deletePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePoolWithOptions($request, $runtime);
    }

    /**
     * @summary 查询作业性能数据
     *  *
     * @param DescribeJobMetricDataRequest $tmpReq  DescribeJobMetricDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobMetricDataResponse DescribeJobMetricDataResponse
     */
    public function describeJobMetricDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeJobMetricDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->arrayIndex)) {
            $request->arrayIndexShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->arrayIndex, 'ArrayIndex', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->arrayIndexShrink)) {
            $query['ArrayIndex'] = $request->arrayIndexShrink;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobMetricData',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询作业性能数据
     *  *
     * @param DescribeJobMetricDataRequest $request DescribeJobMetricDataRequest
     *
     * @return DescribeJobMetricDataResponse DescribeJobMetricDataResponse
     */
    public function describeJobMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMetricDataWithOptions($request, $runtime);
    }

    /**
     * @summary 查询作业即时监控项
     *  *
     * @param DescribeJobMetricLastRequest $tmpReq  DescribeJobMetricLastRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobMetricLastResponse DescribeJobMetricLastResponse
     */
    public function describeJobMetricLastWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeJobMetricLastShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->arrayIndex)) {
            $request->arrayIndexShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->arrayIndex, 'ArrayIndex', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->arrayIndexShrink)) {
            $query['ArrayIndex'] = $request->arrayIndexShrink;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJobMetricLast',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询作业即时监控项
     *  *
     * @param DescribeJobMetricLastRequest $request DescribeJobMetricLastRequest
     *
     * @return DescribeJobMetricLastResponse DescribeJobMetricLastResponse
     */
    public function describeJobMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobMetricLastWithOptions($request, $runtime);
    }

    /**
     * @summary 查看应用版本列表
     *  *
     * @param GetAppVersionsRequest $request GetAppVersionsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppVersionsResponse GetAppVersionsResponse
     */
    public function getAppVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAppVersions',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看应用版本列表
     *  *
     * @param GetAppVersionsRequest $request GetAppVersionsRequest
     *
     * @return GetAppVersionsResponse GetAppVersionsResponse
     */
    public function getAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询托管侧镜像详情。
     *  *
     * @param GetImageRequest $tmpReq  GetImageRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->additionalRegionIds)) {
            $request->additionalRegionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->additionalRegionIds, 'AdditionalRegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->additionalRegionIdsShrink)) {
            $query['AdditionalRegionIds'] = $request->additionalRegionIdsShrink;
        }
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询托管侧镜像详情。
     *  *
     * @param GetImageRequest $request GetImageRequest
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @summary 查询作业详情
     *  *
     * @param GetJobRequest  $request GetJobRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJob',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询作业详情
     *  *
     * @param GetJobRequest $request GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询队列详细信息
     *  *
     * @param GetPoolRequest $request GetPoolRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPoolResponse GetPoolResponse
     */
    public function getPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询队列详细信息
     *  *
     * @param GetPoolRequest $request GetPoolRequest
     *
     * @return GetPoolResponse GetPoolResponse
     */
    public function getPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPoolWithOptions($request, $runtime);
    }

    /**
     * @summary 查询全局Executor信息
     *  *
     * @param ListExecutorsRequest $tmpReq  ListExecutorsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutorsResponse ListExecutorsResponse
     */
    public function listExecutorsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListExecutorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutors',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询全局Executor信息
     *  *
     * @param ListExecutorsRequest $request ListExecutorsRequest
     *
     * @return ListExecutorsResponse ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看托管侧镜像列表
     *  *
     * @param ListImagesRequest $tmpReq  ListImagesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListImagesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageIds)) {
            $request->imageIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageIds, 'ImageIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->imageCategory)) {
            $query['ImageCategory'] = $request->imageCategory;
        }
        if (!Utils::isUnset($request->imageIdsShrink)) {
            $query['ImageIds'] = $request->imageIdsShrink;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImages',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看托管侧镜像列表
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询作业Executor信息
     *  *
     * @param ListJobExecutorsRequest $request ListJobExecutorsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobExecutorsResponse ListJobExecutorsResponse
     */
    public function listJobExecutorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobExecutors',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询作业Executor信息
     *  *
     * @param ListJobExecutorsRequest $request ListJobExecutorsRequest
     *
     * @return ListJobExecutorsResponse ListJobExecutorsResponse
     */
    public function listJobExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutorsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询作业列表
     *  *
     * @param ListJobsRequest $tmpReq  ListJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        if (!Utils::isUnset($tmpReq->sortBy)) {
            $request->sortByShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sortBy, 'SortBy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortByShrink)) {
            $query['SortBy'] = $request->sortByShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询作业列表
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询资源池列表
     *  *
     * @param ListPoolsRequest $tmpReq  ListPoolsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPoolsResponse ListPoolsResponse
     */
    public function listPoolsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPoolsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPools',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询资源池列表
     *  *
     * @param ListPoolsRequest $request ListPoolsRequest
     *
     * @return ListPoolsResponse ListPoolsResponse
     */
    public function listPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoolsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询一个或多个资源已经绑定的标签列表
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResult)) {
            $query['MaxResult'] = $request->maxResult;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询一个或多个资源已经绑定的标签列表
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 移除托管侧镜像信息。
     *  *
     * @param RemoveImageRequest $request RemoveImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveImageResponse RemoveImageResponse
     */
    public function removeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveImage',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移除托管侧镜像信息。
     *  *
     * @param RemoveImageRequest $request RemoveImageRequest
     *
     * @return RemoveImageResponse RemoveImageResponse
     */
    public function removeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeImageWithOptions($request, $runtime);
    }

    /**
     * @summary 为指定的资源列表统一创建并绑定标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为指定的资源列表统一创建并绑定标签
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 为指定的ECS资源列表统一解绑标签
     *  *
     * @param UnTagResourcesRequest $request UnTagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为指定的ECS资源列表统一解绑标签
     *  *
     * @param UnTagResourcesRequest $request UnTagResourcesRequest
     *
     * @return UnTagResourcesResponse UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 更新资源池
     *  *
     * @param UpdatePoolRequest $tmpReq  UpdatePoolRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePoolResponse UpdatePoolResponse
     */
    public function updatePoolWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdatePoolShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceLimits)) {
            $request->resourceLimitsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceLimits, 'ResourceLimits', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->poolName)) {
            $query['PoolName'] = $request->poolName;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceLimitsShrink)) {
            $query['ResourceLimits'] = $request->resourceLimitsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePool',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新资源池
     *  *
     * @param UpdatePoolRequest $request UpdatePoolRequest
     *
     * @return UpdatePoolResponse UpdatePoolResponse
     */
    public function updatePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePoolWithOptions($request, $runtime);
    }
}
